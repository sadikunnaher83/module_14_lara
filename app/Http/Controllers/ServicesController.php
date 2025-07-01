<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        // echo "Welcome to the Services Page!";
        return view('services');
    }
}
