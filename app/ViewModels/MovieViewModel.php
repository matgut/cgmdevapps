<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class MovieViewModel extends ViewModel
{
    public $movie;

    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    public function movie(){
        return collect($this->movie)->merge([
            'poster_path' => ($this->movie['poster_path'] ? 'https://image.tmdb.org/t/p/w500/' . $this->movie['poster_path'] : 'https://via.placeholder.com/500?text=Movie'),
            'vote_average' => $this->movie['vote_average'] * 10 . '%',
            'release_date' => (array_key_exists('release_date',$this->movie)  ? Carbon::parse($this->movie['release_date'])->format('M d, Y') : NULL),
            'genres' => collect($this->movie['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->movie['credits']['crew'])->take(2),
            'cast' => collect($this->movie['credits']['cast'])->take(10),
            'images' => collect($this->movie['images']['backdrops'])->take(9),
        ])->only([
            'poster_path', 'id', 'genres', 'title', 'vote_average', 'overview', 'release_date', 'credits' ,
            'videos', 'images', 'crew', 'cast', 'images'
        ]);
    }
}
