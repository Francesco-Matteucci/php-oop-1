<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="my-4">Film:</h1>

        <?php
        require_once __DIR__ . '/classes/Movie.php';

        $movie1 = new Movie('Interstellar', ['Sci-Fi', 'Adventure'], 2014, 'Christopher Nolan');
        $movie2 = new Movie('Harry Potter', ['Fantasy', 'Adventure'], 2001, 'Chris Columbus');

        $movies = [$movie1, $movie2];
        ?>

        <ul>
            <?php foreach ($movies as $movie) { ?>
            <li><?= $movie->getMovieInfo(); ?></li>
            <?php } ?>
        </ul>
    </div>

</body>

</html>