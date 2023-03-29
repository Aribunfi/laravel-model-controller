<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'homepage'])->name('home');

Route::get('/movie-list', [PageController::class, 'movieList'])->name('movie-list');

Route::get('/movie', function () {
    $movies = config('db.movies');
    return view('movie', compact('movies'));
})->name(movie);
