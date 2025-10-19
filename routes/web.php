<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/request', [ServiceController::class, 'request']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

// Route::get('/services/{id}/packages', [ServiceController::class, 'getPackages']);

Route::get('/pricing', [PackageController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);