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


}
