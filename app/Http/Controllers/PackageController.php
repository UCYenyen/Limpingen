<?php

namespace App\Http\Controllers;

use App\Models\Package;


class PackageController extends Controller
{
    public function index()
    {
        $packageModel = new Package();
        $allPackages = $packageModel->getAllPackages();
        
        return view('pricing', [
            'allPackages' => $allPackages
        ]);
    }
}
