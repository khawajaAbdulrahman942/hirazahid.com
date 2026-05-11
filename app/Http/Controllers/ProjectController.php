<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of projects.
     */
    public function index()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    /**
     * Display the specified project.
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('project-details', compact('project'));
    }

    /**
     * Display featured projects on home page.
     */
    public function home()
    {
        $featuredProjects = Project::where('featured', true)->get();
        return view('index', compact('featuredProjects'));
    }
}
