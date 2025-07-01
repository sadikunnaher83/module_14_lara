<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // echo "Welcome to the Home Page!";
        return view('home');
    }



}
