<?php
require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Genre.php';
require_once __DIR__ . '/classes/Actor.php';
require_once __DIR__ . '/classes/Director.php';
require_once __DIR__ . '/classes/Description.php';

$genreSciFi = new Genre(1, 'Sci-Fi', 'Fantascienza e avventure spaziali');
$genreAdventure = new Genre(2, 'Adventure', 'Film pieni di azione e avventure');
$genreFantasy = new Genre(3, 'Fantasy', 'Mondi immaginari e magia');
$genreDrama = new Genre(4, 'Drama', 'Film drammatici e intensi');
$genreComedy = new Genre(5, 'Comedy', 'Film divertenti e leggeri');

// Interstellar
$actorMM = new Actor('Matthew McConaughey', 'Cooper');
$actorAH = new Actor('Anne Hathaway', 'Brand');
$actorJC = new Actor('Jessica Chastain', 'Murph');

// Harry Potter
$actorDR = new Actor('Daniel Radcliffe', 'Harry Potter');
$actorEW = new Actor('Emma Watson', 'Hermione Granger');
$actorRG = new Actor('Rupert Grint', 'Ron Weasley');

// Inception
$actorLD = new Actor('Leonardo DiCaprio', 'Dom Cobb');
$actorJGL = new Actor('Joseph Gordon-Levitt', 'Arthur');
$actorEP = new Actor('Elliot Page', 'Ariadne');

// The Matrix
$actorKR = new Actor('Keanu Reeves', 'Neo');
$actorLF = new Actor('Laurence Fishburne', 'Morpheus');
$actorCAM = new Actor('Carrie-Anne Moss', 'Trinity');

// Forrest Gump
$actorTH = new Actor('Tom Hanks', 'Forrest Gump');
$actorRW = new Actor('Robin Wright', 'Jenny Curran');
$actorGS = new Actor('Gary Sinise', 'Lt. Dan');

// Registi
$directorNolan = new Director('Christopher Nolan', 'Regno Unito');
$directorColumbus = new Director('Chris Columbus', 'USA');
$directorWachowskis = new Director('Wachowskis', 'USA');
$directorZemeckis = new Director('Robert Zemeckis', 'USA');

// Descrizioni dei film
$descInterstellar = new Description("Un epico viaggio nello spazio alla ricerca di una nuova casa per l'umanità.");
$descHarryPotter = new Description("Un giovane mago scopre il suo destino a Hogwarts.");
$descInception = new Description("Un ladro entra nei sogni per impiantare idee.");
$descMatrix = new Description("Un hacker scopre la realtà simulata in cui vive.");
$descForrestGump = new Description("Le straordinarie avventure di un uomo semplice e gentile.");

$movies = [
    new Movie(1, 'Interstellar', [$genreSciFi, $genreAdventure], 2014, $directorNolan, $descInterstellar, [$actorMM, $actorAH, $actorJC]),
    new Movie(2, 'Harry Potter', [$genreFantasy, $genreAdventure], 2001, $directorColumbus, $descHarryPotter, [$actorDR, $actorEW, $actorRG]),
    new Movie(3, 'Inception', [$genreSciFi, $genreDrama], 2010, $directorNolan, $descInception, [$actorLD, $actorJGL, $actorEP]),
    new Movie(4, 'The Matrix', [$genreSciFi, $genreAdventure], 1999, $directorWachowskis, $descMatrix, [$actorKR, $actorLF, $actorCAM]),
    new Movie(5, 'Forrest Gump', [$genreDrama, $genreComedy], 1994, $directorZemeckis, $descForrestGump, [$actorTH, $actorRW, $actorGS])
];