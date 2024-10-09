<?php
class Movie {
    public $title;
    public $genre;
    public $releaseYear;
    public $director;
    
    public function __construct($title, $genre, $releaseYear, $director) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->director = $director;
    }

    public function getMovieInfo() {
        return "{$this->title} è un film {$this->genre}, uscito nel {$this->releaseYear}, e diretto da {$this->director}.";
    }
}