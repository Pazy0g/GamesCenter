<?php

namespace Games\controller;

use Games\controller\Controller;
use Games\controller\UserController;
use Games\model\User;

class ViewsController extends Controller
{
    // -------- Page principale --------
    public function home()
    {
        require_once $this->view('accueil');
    }

    // -------- Page inscription --------
    public function inscription()
    {
        require_once $this->view('inscription');
    }

    // -------- Page connexion --------
    public function connexion()
    {
        require_once $this->view('connexion');
    }

    // -------- Page mon compte --------
    public function compte()
    {
        if (isset($_SESSION['user_id'])) {
            require_once $this->view('myprofile');
        }
    }

    // -------- Page jeu --------
    public function game()
    {
        require_once $this->view('gamepage');
    }

    // -------- Page plan du site --------
    public function listGames()
    {
        require_once $this->view('gamelist');
    }

    public function addGames()
    {
        require_once $this->view('addgame');
    }

    public function popularGames()
    {
        require_once $this->view('popular');
    }

    public function about()
    {
        require_once $this->view('Apropos');
    }

    public function errorPage()
    {
        require_once $this->view('wrongdestination');
    }

    public function register()
    {
        $userController = new UserController();
        $userController->register();
    }

    public function loginUser()
    {
        $userController = new UserController();
        $userController->login();
    }

    public function deleteUser()
    {
        $userController = new UserController();
        $userController->deleteAccount();
    }

    public function editUser()
    {
        $userController = new UserController();
        $userController->editAccount();
    }

    public function deconnexion()
    {
        $userController = new UserController();
        $userController->logout();
        header('location: index.php');
    }
}
