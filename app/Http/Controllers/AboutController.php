<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

public function index()
{
    // echo "Welcome to the About Page!";
    return view('about');

}

}
