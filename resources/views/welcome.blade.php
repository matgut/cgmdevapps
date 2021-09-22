@extends('layouts.main')

@section('content')
      <div class="p-14">
        <div class="flex flex-col items-center">
            <header class="text-4xl font-semibold">Welcome to the CGMDEV Apps</header>
        </div>
            <div class="flex flex-col items-center">
                <div class="ml-8 mt-10">
                    <a href="{{ route('cgmdev.movieapp.movies.index')}}" class="flex inline-flex items-center custom-button rounded font-semibold px-5 py-4 transition ease-in-out duration-150 w-56" target="_blank">
                        <i class="fas fa-film icon-custom-index"></i>
                        <span class="ml-2">
                            MovieApp
                        </span>
                    </a>
                </div>
                <div class="ml-8 mt-10">
                    <a href="{{ route('cgmdev.weatherapp.index','Quilpue')}}" class="flex inline-flex items-center rounded font-semibold px-5 py-4 custom-button transition ease-in-out duration-150 w-56" target="_blank">
                        <i class="far fa-sun icon-custom-index"></i>
                        <span class="ml-2">
                            Wheather app
                        </span>
                    </a>
                </div>
            </div>
      </div>
@endsection