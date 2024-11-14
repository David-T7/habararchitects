<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Project;
use App\Models\News;
use App\Models\Image;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function openHabarHomepage()
    {
        $pageData = array (
            'pageTitle' => 'Habar Architects'
        );
        
        $projects = Project::where('featured', 1)->latest()->get();
        
        return view('homepage.indexPage', compact('projects'))->with($pageData);
    }
    public function openHabarTeampage()
    {
        $pageData = array (
            'pageTitle' => 'Team Habar Architects'
        );
        
        return view('homepage.team')->with($pageData);
    }
    public function openHabarAboutpage()
    {
        $pageData = array (
            'pageTitle' => 'About Habar Architects'
        );
        
        return view('homepage.about')->with($pageData);
    }
    public function openHabarContactpage()
    {
        $pageData = array (
            'pageTitle' => 'Contact Habar Architects'
        );
        
        return view('homepage.contact')->with($pageData);
    }
    public function openHabarProjects()
    {
        $pageData = array (
            'pageTitle' => 'Habar Architects — Project List'
        );
        
        $projects = Project::where('isActive', 1)->latest()->get();
        
        return view('homepage.project_list', compact('projects'))->with($pageData);
    }
    public function openHabarAllNews()
    {
        $pageData = array (
            'pageTitle' => 'Habar Architects — News'
        );
        
        $newses = News::where('isActive', 1)->latest()->get();
        
        return view('homepage.news_list', compact('newses'))->with($pageData);
    }
    public function openHabarNews($id)
    {
        $news = News::findOrFail($id);
        // $images = Image::findOrFail($id);

        // $images_array = json_decode($images->news_pictures);
        
        $pageData = array (
            'pageTitle' => $news->title
        );
        
        // return view('homepage.news', compact('news', 'images_array'))->with($pageData);
        return view('homepage.news', compact('news'))->with($pageData);
    }
    public function openHabarProject($id)
    {
        $project = Project::where('id', $id)->first();
        
        // Fetch the IDs of the previous and next projects based on some criteria
        $previousProjectId = Project::where('id', '<', $project->id)
                                    ->orderBy('id', 'desc')
                                    ->value('id');

        $nextProjectId = Project::where('id', '>', $project->id)
                                ->orderBy('id', 'asc')
                                ->value('id');
        
        $pageData = array (
            'pageTitle' => $project->title,
            'previousProjectId' => $previousProjectId,
            'nextProjectId' => $nextProjectId,
        );
        
        return view('homepage.project', compact('project'))->with($pageData);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
