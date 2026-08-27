<?php

require_once "pdo.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Bajutsu</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white" id="header">
        <div class="container-fluid">

            <a class="navbar-brand fs-3 text-dark" href="#">
                <img
                    src="./img/ChevalLogo.png"
                    id="chevalogo"
                    alt="Logo Bajutsu">
                Bajutsu
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active fs-5 text-dark" href="#">
                            Accueil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark" href="#">
                            Evenements
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark" href="#">
                            Archives
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-5 text-dark" href="#">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel">

        <div class="carousel-indicators">

            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1">
            </button>

            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2">
            </button>

            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3">
            </button>

        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img
                    src="./img/index_slide_01.jpg"
                    class="d-block w-100"
                    alt="Slide 1">
            </div>

            <div class="carousel-item">
                <img
                    src="./img/index_slide_02.jpg"
                    class="d-block w-100"
                    alt="Slide 2">
            </div>

            <div class="carousel-item">
                <img
                    src="./img/index_slide_04.jpg"
                    class="d-block w-100"
                    alt="Slide 3">
            </div>

        </div>

        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">

            <span
                class="carousel-control-prev-icon"
                aria-hidden="true">
            </span>

            <span class="visually-hidden">
                Previous
            </span>

        </button>

        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">

            <span
                class="carousel-control-next-icon"
                aria-hidden="true">
            </span>

            <span class="visually-hidden">
                Next
            </span>

        </button>

    </div>

    <div class="carousel-space"></div>

</body>

</html>
