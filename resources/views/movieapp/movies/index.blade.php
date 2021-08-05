@extends('movieapp.movies.nav')

@section('content-app')
    <div class="container mx-auto px-4 pt-16 ">
        {{-- <div class="carousel relative shadow-2xl bg-gray-900">
            <div class="carousel-inner relative overflow-hidden w-full">
              <!--Slide 1-->
              @foreach ($popularMovies as $key => $popularMovie )
              {{dd(end($popularMovies)['id'],$key,$popularMovie)}}
                @if($loop->first)
                    <input class="carousel-open" type="radio" id="carousel-{{$key}}" name="carousel" aria-hidden="true" hidden="" checked="checked">
                @else
                    <input class="carousel-open" type="radio" id="carousel-{{$key}}" name="carousel" aria-hidden="true" hidden="">
                @endif
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                    <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">
                       
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $popularMovie['poster_path'] }}" alt="movie"
                        class="hover:opacity-75">
                        
                    </div>
                </div>
                {{-- @if(prev($popularMovies) == false)
                    <label for="carousel-{{count($popularMovies) - 1}}" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                @else
                    <label for="carousel-{{prev($popularMovies)['id']}}" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                @endif

                @if(next($popularMovies) == false)
                    <label for="carousel-0" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">›</label>
                @else
                    <label for="carousel-{{next($popularMovies)['id']}}" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">›</label>
                @endif 
                @if($loop->first)
                    <label for="carousel-{{end($popularMovie)}}" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                @endif
                <label for="carousel-{{$key}}" class="next control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">›</label>
                <!-- Add additional indicators for each slide-->
                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-{{$key}}" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                </ol>
              @endforeach
                
            </div>
        </div> --}}
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular Movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie"/>
                @endforeach
            </div>
        </div>
        <div class="now-playing py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Now Playing
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div>
    </div>
@endsection