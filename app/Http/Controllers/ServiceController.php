<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function request()
    {
        $servicesModel = new Service();
        $allServices = $servicesModel->getAllServices();
        
        return view('request', [
            'allServices' => $allServices
        ]);
    }
}
