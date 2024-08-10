<?php

namespace App\Http\Controllers;

use App\Models\Webpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class WebpagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webpages = Webpage::latest()->get();
        $pageData = array (
            'pageTitle' => 'Habar Architects — Webpages'
        );

        return view('backend.webpages.indexPage', compact('webpages', 'pageData'));
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
    public function show(Webpage $webpage)
    {
        abort_if(Gate::denies('webpages_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pageData = array (
            'pageTitle' => 'Webpage'
        );

        return view('backend.webpages.viewPage', compact('webpage', 'pageData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Webpage $webpage)
    {
        abort_if(Gate::denies('webpages_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.webpages.editPage', compact('webpage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Webpage $webpage)
    {
        $request->validate([
            'page_name' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);
    
        $webpage->update([
            'page_name' => $request->page_name,
            // Update other fields as needed
        ]);
    
        return redirect()->route('webpages.index')->with('update_success', 'Page name updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Webpage $webpage)
    {
        //
    }
}
