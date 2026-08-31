<?php
require_once "pdo.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bajutsu - L'Art Martial des Samouraïs à Cheval</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top" id="header">
        <div class="container">
            <a class="navbar-brand fs-3 text-dark" href="#">
                <img src="./img/ChevalLogo.png" id="chevalogo" alt="Logo Bajutsu" height="40">
                Bajutsu
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark" href="#">Événements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark" href="#">Archives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/index_slide_01.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="./img/index_slide_02.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="./img/index_slide_04.jpg" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <div class="carousel-space"></div>

    <!-- Section Introduction -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-main-green mb-4">Qu'est-ce que le Bajutsu ?</h1>
                    <p class="lead">
                        Le <strong>Bajutsu</strong> est l'art martial traditionnel japonais qui regroupait toutes les
                        compétences que les samouraïs maîtrisaient à cheval :
                        maniabilité, tir à l'arc (Yabusame), lancer de javelot, combat au sabre (Tachi) ou à la lance
                        (Yari).
                    </p>
                    <p>
                        Cet art, à la fois noble et guerrier, incarne l'esprit du bushido et la connexion profonde entre
                        le cavalier et sa monture.
                    </p>
                    <a href="#" class="btn btn-main-green btn-lg mt-3">En savoir plus</a>
                </div>
                <div class="col-lg-6">
                    <div class="img-placeholder rounded">
                        <img src="img/cheval_tenu_tir_02.jpg" alt="Tir à l'arc à cheval">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Disciplines -->
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5 text-main-green">Les Disciplines du Bajutsu</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-main-green">
                        <div class="img-placeholder card-img-top rounded">
                            <img src="img/cours_deroulement.jpg" alt="Tir à l'arc">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title text-main-green">Yabusame</h3>
                            <p class="card-text">Tir à l'arc à cheval, discipline emblématique du Bajutsu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-main-green">
                        <div class="img-placeholder card-img-top rounded">
                            <img src="img/cheval_combat_01.jpg" alt="Combat de sabre">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title text-main-green">Tachi</h3>
                            <p class="card-text">Combat au sabre long, adapté à la position à cheval.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-main-green">
                        <div class="img-placeholder card-img-top rounded">
                            <img src="img/cheval_javelot.jpg" alt="Javelot">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title text-main-green">Yari</h3>
                            <p class="card-text">Lancer de javelot ou combat à la lance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Mini-Jeu -->
    <section class="section-padding bg-white">
        <div class="container">
            <h2 class="text-center mb-5 text-main-green">Testez vos compétences</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="game-placeholder" class="rounded">
                        <div class="archery-game">
                            <div class="archery-score">
                                Score : <span id="archery-total">0</span>
                            </div>

                            <div class="archery-area">
                                <div id="archery-target">
                                    <img src="img/cible.png" alt="Cible">
                                </div>

                                <div id="archery-arrow"></div>
                            </div>

                            <div id="archery-result">
                                <strong id="archery-points">0</strong>
                                <span>points</span>
                                <p id="archery-message"></p>
                                <button id="archery-reset">Retirer la flèche</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-main-green text-white text-center py-4">
        <div class="container">
            <p class="mb-0">© 2026 Bajutsu - L'art martial des samouraïs à cheval</p>
        </div>
    </footer>

</body>

</html>