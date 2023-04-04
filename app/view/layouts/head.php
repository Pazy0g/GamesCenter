<!doctype html>
<html lang="fr">
<?php session_start(); ?>

<head>
    <title>GamesCenter - Accueil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/styles/style.css">
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a class="navbar-brand" id="navLogo" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liste des jeux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Les plus populaires</a>
                    </li>

                    <?php if ($_SESSION == false) : ?>
                        <?= '<li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>'; ?>

                    <?php endif; ?>

                    <?php if ($_SESSION == true) : ?>


                        <?=
                        '<li class="nav-item">
                            <a class="nav-link" href="myprofile.php">Mon compte</a>
                        </li>'; ?>

                    <?php endif; ?>

                </ul>
            </div>
        </nav>




    </header>