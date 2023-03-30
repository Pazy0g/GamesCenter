<?php
// Vérification si le formulaire a été soumis


use games\model\LoginContr;


if (isset($_POST['submit'])) {
    // Récupération des données entrées par l'utilisateur
    $uid = htmlspecialchars($_POST['uid']);
    $pwd = htmlspecialchars($_POST['pwd']);

    // Inclusion des fichiers contenant les classes nécessaires
    include '../model/dbh.classes.php';
    include '../model/login.classes.php';
    include '../model/login.contr.classes.php';

    // Instanciation de la classe LoginContr avec les données entrées par l'utilisateur
    $login = new LoginContr($uid, $pwd);

    // Exécution des gestionnaires d'erreurs et de la connexion de l'utilisateur
    $login->loginUser();

    // Redirection vers la page d'accueil en cas de connexion réussie
    header("Location: ../../index.php");
}
