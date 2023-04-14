<?php

include_once 'app/view/layouts/head.php';
require_once __DIR__ . '/vendor/autoload.php';

if (!isset($_SESSION)) {
    session_start();
}

use Dotenv\Dotenv;

require_once 'app/controller/viewController.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// -------- Récupération des Controllers --------
$frontController = new \games\controller\viewsController();
// -------- Vérification dans le cas où il y a une action, sinon on retourne la page home --------

$title = 'Accueil';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'inscription':
            $frontController->inscription();
            $title = 'inscription';
            break;
        case 'connexion':
            $frontController->connexion();
            $title = 'connexion';
            break;
        case 'compte':
            $frontController->compte();
            $title = 'Mon compte';
            break;
        case 'gamepage':
            $frontController->game();
            // $title = $gameName;
            break;
        case 'gamelist':
            $frontController->listGames();
            $title = 'Liste des jeux';
            break;
        case 'addgame':
            $frontController->addGames();
            $title = 'Ajouter un jeu';
            break;
        case 'popular':
            $frontController->popularGames();
            $title = 'Les plus populaires';
            break;
        case 'about':
            $frontController->about();
            $title = 'A propos';
            break;
        case 'accueil':
            $frontController->home();
            $title = 'Accueil';
            break;
        default:
            $frontController->errorPage();
            $title = 'OOPS';
            break;
    }
} else {
    $frontController->home();
    $title = 'Accueil';
} 

        /* ----------------------------------------------------------------
      -------------------- Gestion de la Connexion ----------------------
      ---------------------------------------------------------------- */
