<?php


namespace games\controller;

use games\controller\controller;

class Users extends Controller
{
    // ----------- Permet de se connecter -----------
    function connexionPage(): void
    {
        require_once $this->view('connexion');
    }

    // -------- connexion à son compte --------
    function loginPost($username, $password): void
    {
        $login = \games\model\Users::login($username);

        if (password_verify($password, $login['password'])) {
            $_SESSION['mail'] = $login['mail'];
            $_SESSION['username'] = $login['username'];
            $_SESSION['is_admin'] = $login['is_admin'];

            header('Location:/dashboard.php');
        } else {
            require_once '/app/view/connexion.php?error=user_not_found';
        }
    }

    // -------- enregistrement dans la db des informations pour création d'un compte --------
    function addUser($username, $mail, $password, $is_admin): void
    {
        $user = new \games\model\Users();

        $user->newUser($username, $mail, $password, $is_admin);
        require_once $this->view('index.php?action=connexion');
    }

    // -------- mise à jour d'un utilisateur par rapport à son id --------
    function updateUserPost($pseudo, $mail, $id): void
    {
        $user = new \games\model\Users();

        $user->updateUser($pseudo, $mail, $id);

        header('Location:dashboard.php?action=users');
    }

    // -------- suppression d'un utilisateur par rapport à son id --------
    function deleteUser($id): void
    {
        $user = new \games\model\Users();
        $user->deleteUser($id);

        header('Location:dashboard.php?action=users');
    }

    // -------- gestion et verification de la connexion --------
    function deconnexion(): void
    {
        session_destroy();
        header('Location:/');
    }
}
