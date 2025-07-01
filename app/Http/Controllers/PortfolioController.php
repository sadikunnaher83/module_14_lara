<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // echo "Welcome to the Portfolio Page!";
        return view('portfolio');
    }
}
