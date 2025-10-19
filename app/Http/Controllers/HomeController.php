<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch products
        $servicesModel = new Service();
        $allServices = $servicesModel->getAllServices();
        
        // Fetch testimonies
        $projectsModel = new Project();
        $featuredProjects = $projectsModel->getFeaturedProjects();
        
        return view('home', [
            'featuredProjects' => $featuredProjects,
            'allServices' => $allServices
        ]);
    }
}
