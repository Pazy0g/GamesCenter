<?php

namespace games\controller;

use games\controller\Controller;

class Users extends Controller
{
    // ----------- Permet de se connecter -----------
    public function connexionPage(): void
    {
        require_once $this->view('auth/login');
    }

    // -------- connexion à son compte --------
    public function loginPost(string $username, string $password): void
    {
        $login = \games\model\Users()::login($username);

        if (password_verify($password, $login['password'])) {
            $_SESSION['mail'] = $login['mail'];
            $_SESSION['id'] = $login['id'];
            $_SESSION['pseudo'] = $login['pseudo'];
            $_SESSION['id_roles'] = $login['id_roles'];

            header('Location:/dashboard.php');
        } else {
            require_once $this->view('errors/oops');
        }
    }

    // -------- enregistrement dans la db des informations pour création d'un compte --------
    public function addUser(string $pseudo, string $mail, string $password, int $id_roles = null): void
    {
        $user = new \games\model\Users();

        $user->createUser($pseudo, $mail, $password, $id_roles);
        require_once $this->view('users/register-confirm');
    }

    // -------- mise à jour d'un utilisateur par rapport à son id --------
    public function updateUserPost(string $pseudo, string $mail, int $id): void
    {
        $user = new \games\model\Users();

        $user->updateUser($pseudo, $mail, $id);

        header('Location:dashboard.php?action=users');
    }

    // -------- suppression d'un utilisateur par rapport à son id --------
    public function deleteUser(int $id): void
    {
        $user = new \games\model\Users();
        $user->deleteUser($id);

        header('Location:dashboard.php?action=users');
    }

    // -------- gestion et verification de la connexion --------
    public function deconnexion(): void
    {
        session_destroy();
        header('Location:/');
    }
}
