<?php
// Vérification si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupération des données entrées par l'utilisateur
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Inclusion des fichiers contenant les classes nécessaires
    include '../classes/dbh.classes.php';
    include '../classes/login.classes.php';
    include '../classes/login.contr.classes.php';

    // Instanciation de la classe LoginContr avec les données entrées par l'utilisateur
    $login = new LoginContr($uid, $pwd);

    // Exécution des gestionnaires d'erreurs et de la connexion de l'utilisateur
    $login->loginUser();

    // Redirection vers la page d'accueil en cas de connexion réussie
    header("Location: ../index.php?error=none");
}
