<?php
// UserController.php

namespace Games\controller;

use Games\model\User;

class UserController
{
    public function register()
    {
        if (isset($_POST['submit'])) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Récupère les données du formulaire d'inscription
                $username = htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8');
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $password = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
                var_dump($username, $email, $password);
                // Vérifie que les champs ont bien été renseignés
                if (empty($username) || empty($email) || empty($password)) {
                    $error = "Veuillez remplir tous les champs";
                }
                // Vérifie que les mots de passe sont identiques

                // Vérifie que l'adresse e-mail est valide
                elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error = "L'adresse e-mail n'est pas valide";
                }
                // Vérifie que l'adresse e-mail n'est pas déjà utilisée
                elseif (User::findByEmail($email)) {
                    $error = "L'adresse e-mail est déjà utilisée";
                }
                // Si toutes les validations sont OK, crée un nouvel utilisateur et enregistre-le en base de données
                else {
                    $user = new User($username, $email, $password);
                    $user->save();
                    header('Location: ?action=connexion');
                    exit();
                }
            }

            // Charge la vue d'inscription en lui passant éventuellement un message d'erreur
            include  'app/view/inscription.php';
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupère les données du formulaire de connexion
            $username = htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8');
            $password = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');

            // Récupère l'utilisateur correspondant à l'aide de l'username
            $user = User::findByUsername($username);
            // Vérifie que l'utilisateur existe et que le mot de passe est correct
            if ($user && $user->checkPassword($password)) {
                // Stocke l'utilisateur en session pour le connecter
                $_SESSION['user_id'] = $user->getUserId();
                header('Location: index.php');
            } else {
                $error = "Username ou mot de passe incorrect";
                echo $error;
            }
        }

        // Charge la vue de connexion en lui passant éventuellement un message d'erreur
        include 'app/view/connexion.php';
    }

    public function logout()
    {
        // Déconnecte l'utilisateur en supprimant sa session
        session_destroy();
        header('Location: index.php');
        exit();
    }
}
