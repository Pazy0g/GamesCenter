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

$actionList = [
    'inscription' => 'inscription',
    'connexion' => 'connexion',
    'compte' => 'compte',
    'gamepage' => 'game',
    'gamelist' => 'listGames',
    'addgame' => 'addGames',
    'popular' => 'popularGames',
    'about' => 'about',
    'accueil' => 'home',
    'register' => 'registerUser',
    'login' => 'loginUser',
    'delete' => 'deleteUser'
];

// Action par défaut si aucune action n'est encore définie
$defaultAction = 'home';

if (isset($_GET['action']) && array_key_exists($_GET['action'], $actionList)) {
    $methodName = $actionList[$_GET['action']];
    $frontController->$methodName();
} else {

    $frontController->$defaultAction();
}

        /* ----------------------------------------------------------------
      -------------------- Gestion de la Connexion ----------------------
      ---------------------------------------------------------------- */
