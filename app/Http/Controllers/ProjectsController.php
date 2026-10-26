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
use Symfony\Component\HttpFoundation\Response;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    use StoreImageTrait;

    public function index()
    {
        abort_if(Gate::denies('projects_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projects = Project::with(['user', 'images'])->latest()->get();
        $pageData = array (
            'pageTitle' => 'Habar Projects'
        );

        return view('backend.projects.indexPage', compact('projects', 'pageData'));
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

        $this->verifyAndStoreImage($request, 'project_pictures', $project->id);

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
        $project->update($request->validated());

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
