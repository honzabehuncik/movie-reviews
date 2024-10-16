<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $randomMovie = Movie::inRandomOrder()->first();
        
        $movies = Movie::all();
        
        return view('movies.index', compact('randomMovie', 'movies'));
    }

    public function show($id)
    {
        $movie = Movie::with('reviews')->findOrFail($id);
        return view('movies.show', compact('movie'));
    }
}
