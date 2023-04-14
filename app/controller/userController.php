<?php
// index.php

require_once 'vendor/autoload.php';

use games\model\User;
use games\model\UserDAO;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'register') {
        // Récupération des données du formulaire d'inscription
        $username = htmlspecialchars($_POST['uid']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash(htmlspecialchars($_POST['pwd']), PASSWORD_DEFAULT);

        // Création d'un nouvel utilisateur
        $user = new User(null, $username, $email, $password);

        // Enregistrement de l'utilisateur dans la base de données
        $userDAO = new UserDAO();
        $userDAO->save($user);

        // Redirection vers la page de connexion
        header('Location: ../view/login.php');
        exit;
    } elseif ($_POST['action'] === 'login') {
        // Récupération des données du formulaire de connexion
        $username = htmlspecialchars($_POST['uid']);
        $password = htmlspecialchars($_POST['pwd']);

        // Récupération de l'utilisateur correspondant à l'adresse email
        $userDAO = new UserDAO();
        $user = $userDAO->getByEmail($email);

        // Vérification du mot de passe
        if ($user && password_verify($password, $user->getPassword())) {
            // Authentification réussie
            // Création d'une session utilisateur
            session_start();
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['username'] = $user->getUsername();

            // Redirection vers la page d'accueil
            header('Location: ../view/index.php');
            exit;
        } else {
            // Authentification échouée
            // Affichage d'un message d'erreur
            $error_message = "Adresse email ou mot de passe incorrect";
        }
    }
}

// Affichage du formulaire d'inscription et de connexion
include 'views/register.php';
