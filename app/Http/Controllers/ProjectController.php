<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {        
        $projectsModel = new Project();
        $allProjects = $projectsModel->getAllProjects();
        
        return view('projects', [
            'allProjects' => $allProjects
        ]);
    }
}
