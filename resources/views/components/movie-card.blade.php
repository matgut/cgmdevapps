<div class="mt-8">
    <a href="{{ route('cgmdev.movieapp.movies.show', $movie['id']) }}">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="movie"
                class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="{{ route('cgmdev.movieapp.movies.show', $movie['id']) }}"
            class="text-lg mt-2 hover:text-gray:300">{{ $movie['title'] }}</a>
        <div class="flex items-center text-sm mt-1">
            <i class="fas fa-star icon-star"></i>
            <span class="ml-1">{{ $movie['vote_average'] }}</span>
            <span class="mx-2">|</span>
            @if($movie['release_date'] !== NULL )
                <span>{{ $movie['release_date']}}</span>
            @endif
        </div>
        <div class="text-sm">
           {{ $movie['genres'] }}
        </div>
    </div>
</div>
