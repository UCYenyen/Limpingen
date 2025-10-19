<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $servicesModel = new Service();
        $allServices = $servicesModel->getAllServices();
        
        $projectsModel = new Project();
        $featuredProjects = $projectsModel->getFeaturedProjects();
        
        return view('home', [
            'featuredProjects' => $featuredProjects,
            'allServices' => $allServices
        ]);
    }
}
