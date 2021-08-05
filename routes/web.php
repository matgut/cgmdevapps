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



//Movie App

//Movies
Route::get('/movie-app', 'App\Http\Controllers\MovieApp\MoviesController@index')->name('cgmdev.movieapp.movies.index');
Route::get('/movie-app/movie/{movie}', 'App\Http\Controllers\MovieApp\MoviesController@show')->name('cgmdev.movieapp.movies.show');
//Actors
Route::get('/movie-app/actors', 'App\Http\Controllers\ActorsController@show')->name('cgmdev.movieapp.actors.index');
Route::get('/movie-app/actors/{movie}', 'App\Http\Controllers\ActorsController@show')->name('cgmdev.movieapp.actors.show');


//Weather App
Route::get('/weather-app/{cityName}', 'App\Http\Controllers\WeatherApp\WeatherController@index')->name('cgmdev.weatherapp.index');
//Route::get('/weather-app/wheather/{cityName}', 'App\Http\Controllers\WeatherApp\WeatherController@index')->name('cgmdev.weatherapp.show');
