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

Route::get('/', 'App\Http\Controllers\MainController@index')->name('cgmdev.welcome');
Route::get('/movie-app', 'App\Http\Controllers\MoviesController@index')->name('cgmdev.movieapp.index');
Route::get('/movie/{movie}', 'App\Http\Controllers\MoviesController@show')->name('cgmdev.movieapp.show');
