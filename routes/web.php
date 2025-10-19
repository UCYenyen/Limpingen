<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [HomeController::class, 'index']);
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/projects', function () {
    return view('projects');
});