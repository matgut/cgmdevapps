@extends('layouts.main')

@section('content')
      <div class="p-14">
        <div class="flex flex-col items-center">
            <header class="text-4xl font-semibold">Welcome to the CGMDEV Apps</header>
        </div>
            <div class="flex flex-col items-center">
                <div class="ml-8 mt-10">
                    <a href="{{ route('cgmdev.movieapp.index')}}" class="flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150 w-56" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                        </svg>
                        <span class="ml-2">
                            MovieApp
                        </span>
                    </a>
                </div>
                <div class="ml-8 mt-10">
                    <a href="" class="flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150 w-56" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="ml-2">
                            Wheather app
                        </span>
                    </a>
                </div>
            </div>
      </div>
@endsection