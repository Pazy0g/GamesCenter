<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Games\controller\ViewsController;

// Récupération des Controllers
$frontController = new ViewsController();

// Vérification dans le cas où il y a une action, sinon on retourne la page home 

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
    'register' => 'register',
    'login' => 'loginUser',
    'deconnexion' => 'deconnexion',
    'delete' => 'deleteUser',
    'edituserinfo' => 'editUser',
    'comment' => 'comment'
];

// Action par défaut si aucune action n'est encore définie
$defaultAction = 'home';

if (isset($_GET['action']) && array_key_exists($_GET['action'], $actionList)) {
    $methodName = $actionList[$_GET['action']];
    $frontController->$methodName();
} else {

    $frontController->$defaultAction();
}
