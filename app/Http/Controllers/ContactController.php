<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // echo "Welcome to the Contact Page!";
        return view('contact');
    }
}
