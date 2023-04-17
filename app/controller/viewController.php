<?php


namespace games\controller;

use games\controller\Controller;

require_once 'controller.php';


class viewsController extends Controller
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
        require_once $this->view('myprofile');
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

    public function registerUser()
    {
        require_once $this->control('userController');
    }

    public function loginUser()
    {
        require_once $this->control('userController');
    }

    public function deleteUser()
    {
        require_once $this->control('userController');
    }
}
