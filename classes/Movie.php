<?php
class Movie {
    public string $title;
    public array $genres;
    public int $releaseYear;
    public string $director;
    
    public function __construct(string $title, array $genres, int $releaseYear, string $director) {
        $this->title = $title;
        $this->genres = $genres;
        $this->releaseYear = $releaseYear;
        $this->director = $director;
    }

    public function getMovieInfo(): string {
        $formattedGenres = '';
        foreach ($this->genres as $genre) {
            $formattedGenres .= $genre . ' ';
        }
        return "{$this->title} è un film {$formattedGenres}, uscito nel {$this->releaseYear}, diretto da {$this->director}.";
    }
}