<?php

if (!defined('MY_APP')) {
    die("Accès interdit");
}

class VueApropos extends VueGenerique
{

    public function __construct()
    {
        parent::__construct();
    }

    public function afficher_apropos()
    {

<<<<<<< HEAD
?>
=======
        </body>
        </html>
        <?php
        */
        ?>
>>>>>>> 63d63c1517b3254d18aa44883e89788df896623e
        <!DOCTYPE html>
        <html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>À Propos - Site de Jeux Vidéo</title>
            <!-- Bootstrap CSS -->
            <!-- Bootstrap CSS -->
            <style>
                body {
                    background-color: #f4f4f4;
                    color: #333;
                }

                .play-section {
                    position: relative;
                    height: 50vh;
                    color: #fff;
                    text-align: center;
                    overflow: hidden;
                }

                .play-section video {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    z-index: 2;
                }

                .overlay-content {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 2;
                }

                .overlay-content h2 {
                    font-size: 3em;
                    color: white;
                }

                .overlay-content a {
                    font-size: 1.5em;
                    background-color: rgb(138, 146, 69);
                    color: white;
                    padding: 10px 20px;
                    border-radius: 5px;
                    text-decoration: none;
                }

                .overlay-content a:hover {
                    background-color: #0056b3;
                }

                .about-section,
                .game-elements-section {
                    padding: 50px;
                    background: #fff;
                }

                .about-section .container p {
                    padding: 30px;
                }
                .game-elements-section .container {
                    background-color: #f4f4f4;
                }

                .play-button {
                    margin-top: 20px;
                }

                .card {
                    margin: 20px;
                }
            </style>
        </head>

        <body>
            <div class="about-section">
                <div class="container">
                    <h2>À Propos de Notre Site</h2>
                    <p>
                        Bienvenue sur notre site dédié aux passionnés de Metallic Infestation.
                        Ici, vous trouverez l'univers du jeu, les élemnts et autre encore...
                    </p>
                </div>
            </div>

            <div class="play-section">
                <video autoplay muted loop id="myVideo">
                    <source src="images/video.mp4" type="video/mp4">
                </video>
                <div class="overlay-content">
                    <h2>DÉCOUVREZ NOTRE JEU</h2>
                    <a href="index.php?module=telechargement&action=telechargement">JOUER</a>
                </div>
            </div>

            <div class="game-elements-section">
                <hr>
                <div class="container">
                    <h2>Explorez les Éléments du Jeu</h2>
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="card h-100 w-100">
                                <img src="images/ennemis.png" class="card-img-top" alt="Ennemis">
                                <div class="card-body">
                                    <h5 class="card-title">Ennemis</h5>
                                    <p class="card-text">Découvrez les différents ennemis du jeu...</p>
                                    <a href="index.php?module=ennemis&action=ennemis" class="btn btn-primary">Explorer</a>
                                    <hr>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card h-100 w-100">

                                <img src="images/towers.png" class="card-img-top" alt="Tours">
                                <div class="card-body">
                                    <h5 class="card-title">Tours</h5>
                                    <p class="card-text">Apprenez tout sur les tours défensives du jeu...</p>
                                    <a href="index.php?module=tours&action=tours" class="btn btn-primary">Explorer</a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="card h-100 w-100">
                                <img src="images/maps.png" class="card-img-top" alt="Cartes">
                                <div class="card-body">
                                    <h5 class="card-title">Cartes</h5>
                                    <p class="card-text">Explorez les paysages épiques du jeu...</p>
                                    <a href="index.php?module=cartes&action=cartes" class="btn btn-primary">Explorer</a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS and dependencies -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        </body>

        </html>
        <?php
    }
}
?>