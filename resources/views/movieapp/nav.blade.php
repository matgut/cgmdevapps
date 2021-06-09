@extends('layouts.main')
@section('content')
<nav class="border-b border-gray-800">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex flex-col md:flex-row items-center">
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                    </svg>
                    MovieApp
                </a>
            </li>
            <li class="md:ml-16 mt-3 md:mt-0">
                <a href="{{ route('cgmdev.movieapp.index')}}" class="hover:text-gray-300">Movies</a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="/" class="hover:text-gray-300">Series</a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="/" class="hover:text-gray-300">Actors</a>
            </li>
        </ul>
        <div class="flex flex-col md:flex-row items-center">
            <livewire:search-dropdown>
            <div class="md:ml-4 mt-3 md:mt-0">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                </a>
            </div>
        </div>
    </div>
</nav>
@yield('content-app')
@endsection