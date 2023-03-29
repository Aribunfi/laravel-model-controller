<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index() {
        return view('homepage');
    }

    public function movieList() {
        $movies = config('db.movies');
        
        return view('movie-list', compact('movies'));
    }

    public function movieDetail() {
        $movies = config('db.movies');
        $movie = $movies[$movie_key];
        return view('movie-detail', compact('movie', 'movie_key'));
    }




}
