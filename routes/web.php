<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('home');
});

/** Rota para o Controller Home */
Route::resource('/home', HomeController::class);

/** Rota para o Controller Filmes */
Route::resource('/filmes', FilmesController::class);