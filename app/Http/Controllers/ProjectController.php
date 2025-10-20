<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {        
        $allProjects = Project::all();
        
        return view('projects', [
            'allProjects' => $allProjects
        ]);
    }
}
