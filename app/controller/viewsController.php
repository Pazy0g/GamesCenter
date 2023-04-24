<?php

namespace Games\controller;

use Games\controller\Controller;
use Games\controller\UserController;
use Games\model\User;
use Games\controller\CommentController;

class ViewsController extends Controller
{
    //  Page accueil 
    public function home()
    {
        require_once $this->view('accueil');
    }

    //  Page inscription 
    public function inscription()
    {
        require_once $this->view('inscription');
    }

    //  Page connexion 
    public function connexion()
    {
        require_once $this->view('connexion');
    }

    //  Page mon compte 
    public function compte()
    {
        if (isset($_SESSION['user_id'])) {
            require_once $this->view('myprofile');
        }
    }

    // Page jeu
    public function game()
    {
        require_once $this->view('gamepage');
    }

    //  Page liste des jeux 
    public function listGames()
    {
        require_once $this->view('gamelist');
    }
    // Page ajouter un jeu
    public function addGames()
    {
        require_once $this->view('addgame');
    }
    // Page jeux populaires
    public function popularGames()
    {
        require_once $this->view('popular');
    }
    // Page a propos
    public function about()
    {
        require_once $this->view('Apropos');
    }

    public function legals()
    {
        require_once $this->view('legals');
    }
    // Page d'erreur
    public function errorPage()
    {
        require_once $this->view('wrongdestination');
    }
    // Fonction d'inscription
    public function register()
    {
        $userController = new UserController();
        $userController->register();
    }
    // Fonction de connexion
    public function loginUser()
    {
        $userController = new UserController();
        $userController->login();
    }
    // Fonction supprimer un user
    public function deleteUser()
    {
        $userController = new UserController();
        $userController->deleteAccount();
    }
    // Fonction editer un user
    public function editUser()
    {
        $userController = new UserController();
        $userController->editAccount();
    }
    // Fonction deconnexion
    public function deconnexion()
    {
        $userController = new UserController();
        $userController->logout();
        header('location: index.php');
    }
}
