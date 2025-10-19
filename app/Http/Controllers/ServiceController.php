<?php

namespace App\Http\Controllers;

use App\Models\Package;
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

    // public function getPackages($id)
    // {
    //     $packages = Package::where('service_id', $id)->get(['id', 'name']);
    //     return response()->json($packages);
    // }
}
