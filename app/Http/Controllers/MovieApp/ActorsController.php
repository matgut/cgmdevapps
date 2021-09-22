<?php

namespace App\Http\Controllers\MovieApp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActorsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
                        ->get('https://api.themoviedb.org/3/movie/popular')
                        ->json()['results'];

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
                        ->get('https://api.themoviedb.org/3/movie/now_playing')
                        ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
                        ->get('https://api.themoviedb.org/3/genre/movie/list')
                        ->json()['genres'];

        // $genres = collect($genresArray)->mapWithKeys(function ($genre) {
        //     return [$genre['id'] => $genre['name']];
        // });

        $viewModel = new MoviesViewModel(
            $popularMovies,
            $nowPlayingMovies,
            $genres,
        );

        return view('movieapp.actors.index', $viewModel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))
                        ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
                        ->json();
        //dd($movieDetails);

        $viewModel = new MovieViewModel($movie);

        return view('movieapp.actors.show',$viewModel);

    }
}
