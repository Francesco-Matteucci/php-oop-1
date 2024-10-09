<?php
class Movie {
    public string $title;
    public string $genre;
    public int $releaseYear;
    public string $director;
    
    public function __construct(string $title, string $genre, int $releaseYear, string $director) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->director = $director;
    }

    public function getMovieInfo() {
        return "{$this->title} è un film {$this->genre}, uscito nel {$this->releaseYear}, e diretto da {$this->director}.";
    }
}