<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Image;
use App\Models\Project;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    use StoreImageTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sorts = [
            'newest' => ['created_at', 'desc'],
            'oldest' => ['created_at', 'asc'],
            'title' => ['title', 'asc'],
            'year' => ['year', 'desc'],
        ];
        [$sortColumn, $sortDirection] = $sorts[$request->input('sort')] ?? $sorts['newest'];

        $projects = Project::with(['user', 'images'])
            ->when($request->filled('q'), function ($query) use ($request) {
                $term = '%'.$request->input('q').'%';
                $query->where(fn ($query) => $query
                    ->where('title', 'like', $term)
                    ->orWhere('code_name', 'like', $term)
                    ->orWhere('client', 'like', $term)
                    ->orWhere('location', 'like', $term)
                    ->orWhere('description', 'like', $term));
            })
            // Stored statuses differ only in case ("Design proposal" / "Design Proposal").
            ->when($request->filled('status'), fn ($query) => $query->whereRaw('lower(status) = ?', [strtolower($request->input('status'))]))
            ->when($request->filled('year'), fn ($query) => $query->where('year', $request->input('year')))
            ->when(in_array($request->input('featured'), ['0', '1'], true), fn ($query) => $query->where('featured', $request->input('featured')))
            ->orderBy($sortColumn, $sortDirection)
            ->get();

        $filterOptions = [
            'statuses' => Project::where('status', '!=', '')->pluck('status')->unique(fn ($status) => strtolower($status))->sort()->values(),
            'years' => Project::where('year', '!=', '')->distinct()->orderByDesc('year')->pluck('year'),
        ];
        $totalProjects = Project::count();
        $pageData = array (
            'pageTitle' => 'Habar Projects'
        );

        return view('backend.projects.indexPage', compact('projects', 'filterOptions', 'totalProjects', 'pageData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $pageData = array (
            'pageTitle' => 'Habar create a project'
        );

        return view('backend.projects.createPage')->with($pageData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $request->validated();
        $project = new Project();
        
        $project->title = $request->input('title');
        $project->code_name = $request->input('code_name');
        $project->description = $request->input('description');
        $project->collaborators = $request->input('collaborators');
        $project->year = $request->input('year');
        $project->budget = $request->input('budget');
        $project->story_num = $request->input('story_num');
        $project->site_area = $request->input('site_area');
        $project->floor_area = $request->input('floor_area');
        $project->engineers = $request->input('engineers');
        $project->client = $request->input('client');
        $project->location = $request->input('location');
        $project->status = $request->input('status');
        $project->types = $request->input('types');
        $project->currency = 'Br';
        $project->city = 'Addis Ababa';
        $project->country = 'Ethiopia';
        $project->category = 'large';
        $project->featured = $request->input('featured');
        $project->isActive = 1;
        $project->postedBy = $request->input('postedBy');
        
        $project->save();

        $this->syncProjectImages($project->id, $request->file('project_pictures', []));

        return redirect()->route('post_projects.index')->with('create_success', 'New project successfully created! Click on "view" to explore every detail of the project.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($project_id)
    {
        abort_if(Gate::denies('projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project = Project::FindOrFail($project_id);
        $pageData = array (
            'pageTitle' => 'Habar Projects'
        );

        return view('backend.projects.viewPage', compact('project', 'pageData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($project_id)
    {
        abort_if(Gate::denies('projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project = Project::FindOrFail($project_id);
        return view('backend.projects.editPage', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, $project_id)
    {
        abort_if(Gate::denies('projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project = Project::FindOrFail($project_id);

        $current = $this->projectImageNames($project->id);
        $remove = array_intersect(array_map('intval', $request->input('remove_images', [])), array_keys($current));
        $add = $request->file('project_pictures', []);

        if (count($current) - count(array_unique($remove)) + count($add) < 1) {
            throw ValidationException::withMessages([
                'remove_images' => 'A project needs at least one photo. Add a new one before removing the last.',
            ]);
        }

        $project->update($request->safe()->except(['project_pictures', 'replace_images', 'remove_images']));
        $this->syncProjectImages($project->id, $add, $request->file('replace_images', []), $remove);

        return redirect()->route('post_projects.index')->with('update_success', 'Project #'. $project->id .' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project_id)
    {
        abort_if(Gate::denies('projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project = Project::FindOrFail($project_id);

        File::deleteDirectory(public_path('/img/projects/'.$project->id));
        Image::where('project_id', $project->id)->delete();

        $project->delete();

        return redirect()->route('post_projects.index')->with('delete_success', 'Project successfully deleted!');
    }
}
