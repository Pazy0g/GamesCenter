<?php


use games\model\User;
use games\model\UserDAO;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'register') {
        // Récupération des données du formulaire d'inscription
        $username = htmlspecialchars($_POST['uid']);
        $email = htmlspecialchars($_POST['email']);
        $pwd = password_hash(htmlspecialchars($_POST['pwd']), PASSWORD_DEFAULT);

        // Création d'un nouvel utilisateur
        $user = new User($username, $email, $pwd);

        // Enregistrement de l'utilisateur dans la base de données
        $userDAO = new UserDAO();
        $userDAO->save($user);

        // Redirection vers la page de connexion
        header('Location: ../view/connexion.php');
        exit;
    } elseif (isset($_POST['action']) && $_POST['action'] === 'login') {
        // Récupération des données du formulaire de connexion
        $username = htmlspecialchars($_POST['uid']);
        $pwd = htmlspecialchars($_POST['pwd']);

        // Récupération de l'utilisateur correspondant au nom d'utilisateur
        $userDAO = new UserDAO();
        $user = $userDAO->getByUsername($username);

        // Vérification du mot de passe
        if ($user && password_verify($pwd, $user->getPassword())) {
            // Authentification réussie
            // Création d'une session utilisateur
            session_start();
            $_SESSION['username'] = $user->getUsername();

            // Redirection vers la page d'accueil
            header('Location: ../view/index.php');
            exit;
        } else {
            // Authentification échouée
            // Affichage d'un message d'erreur
            $error_message = "Nom d'utilisateur ou mot de passe incorrect";
        }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'delete') {
        // Vérification de l'existence de la variable de session
        if (isset($_SESSION['username'])) {
            // Récupération de l'utilisateur correspondant au nom d'utilisateur
            $userDAO = new UserDAO();
            $user = $userDAO->getByUsername($_SESSION['username']);

            // Suppression de l'utilisateur de la base de données
            $userDAO->delete($user);

            // Déconnexion de l'utilisateur
            session_start();
            session_destroy();

            // Redirection vers la page d'accueil
            header('Location: ../view/index.php');
            exit;
        }
    }
}
