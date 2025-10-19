<?php

namespace App\Http\Controllers;

class RequestController extends Controller
{
    public function get()
    {        
        return view('requests');
    }
}
