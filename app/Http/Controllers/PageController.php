<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class PageController extends Controller
{
    
    public function index() {
        $movies = Movie::all();
        return view('movies.list', compact('movies'));
    }

    public function movieList() {
        $movies = config('db.movies');
        
        return view('movie-list', compact('movies'));
    }

    public function movieDetail($movie_key) {
        $movies = config('db.movies');
        $movie = $movies[$movie_key];
        return view('movie-detail', compact('movie', 'movie_key'));
    }




}
