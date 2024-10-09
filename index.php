<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista di Film</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1 class="my-4 text-center text-dark">Lista di Film</h1>

        <div class="row">
            <?php
            require_once __DIR__ . '/db.php';

            foreach ($movies as $movie) { ?>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h4 class="card-title text-center"><?= $movie->title; ?></h4>
                        <p class="card-text">Anno: <?= $movie->releaseYear; ?></p>
                        <p class="card-text">Diretto da: <?= $movie->director->getDirectorInfo(); ?></p>
                        <p class="card-text"><i class="bi bi-film"></i>
                            <?php foreach ($movie->genres as $genre) { ?>
                            <?= $genre->getName(); ?>
                            <?php } ?>
                        </p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#actorsModal<?= $movie->id; ?>">
                            Visualizza attori
                        </button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="actorsModal<?= $movie->id; ?>" tabindex="-1"
                aria-labelledby="actorsModalLabel<?= $movie->id; ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="actorsModalLabel<?= $movie->id; ?>">Attori principali di
                                <?= $movie->title; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <?php foreach ($movie->actors as $actor) { ?>
                                <li><?= $actor->getActorInfo(); ?></li>
                                <?php } ?>
                            </ul>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal<?= $movie->id; ?>">Visualizza descrizione</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="descriptionModal<?= $movie->id; ?>" tabindex="-1"
                aria-labelledby="descriptionModalLabel<?= $movie->id; ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="descriptionModalLabel<?= $movie->id; ?>">Descrizione di
                                <?= $movie->title; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><?= $movie->description->getDescriptionText(); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>