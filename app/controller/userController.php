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
                // Si toutes les validations sont OK, crée un nouvel utilisateur et enregistrement en base de données
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
                $_SESSION['user_id'] = $user->getUserLogin();
                header('Location: index.php');
            } else {
                $error = "Username ou mot de passe incorrect";
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
    }

    public function deleteAccount()
    {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user_id'])) {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            header('Location: login.php');
            exit;
        } else {
            // Récupérer l'ID de l'utilisateur à partir de la session
            $user_id = $_SESSION['user_id'];

            // Supprimer l'utilisateur de la base de données en utilisant la méthode delete() de la classe User
            User::delete($user_id);

            // Déconnecter l'utilisateur et redirige vers la page d'accueil
            session_destroy();
            header('Location: index.php');
            exit;
        }
    }

    public function editAccount()
    {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['user_id'])) {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            header('Location: connexion.php');
        }

        // Récupérer l'ID de l'utilisateur à partir de la session
        $user_id = $_SESSION['user_id'];

        // Récupérer l'objet User correspondant à l'utilisateur connecté
        $user = User::getUserId($user_id);

        // Vérifier si le formulaire a été soumis
        if (isset($_POST['submit'])) {
            // Récupérer les nouvelles informations de l'utilisateur à partir du formulaire

            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            var_dump($_POST);
            // Mettre à jour les informations de l'utilisateur dans la base de données en utilisant la méthode d'update de la classe User
            $user->updateUser($user_id, $username, $email, $password);
            var_dump($user);
            // Redirigez l'utilisateur vers la page de profil
            // header('Location: index.php?action=compte');
        }
    }
}
