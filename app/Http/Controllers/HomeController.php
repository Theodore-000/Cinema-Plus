<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
       public function index()
    {
        $movies = Movie::all(); // Fetch movies from the database
        return view('home', compact('movies')); // Pass movies to the view
    }
}