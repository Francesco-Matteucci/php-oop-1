<?php
require_once __DIR__ . '/Genre.php';
require_once __DIR__ . '/Actor.php';
require_once __DIR__ . '/Director.php';
require_once __DIR__ . '/Description.php';

class Movie {
    public int $id;
    public string $title;
    public array $genres;
    public int $releaseYear;
    public Director $director;
    public Description $description;
    public array $actors;

    public function __construct(int $id, string $title, array $genres, int $releaseYear, Director $director, Description $description, array $actors) {
        $this->id = $id;
        $this->title = $title;
        $this->genres = $genres;
        $this->releaseYear = $releaseYear;
        $this->director = $director;
        $this->description = $description;
        $this->actors = $actors;
    }
}