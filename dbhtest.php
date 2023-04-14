<?php
// test_db_connection.php

require_once 'app/model/dbh.classes.php';

use games\model\Dbh;
use games\model\UserDAO;
use games\model\User;

if (!isset($_ENV['DB_HOST']) || !isset($_ENV['DB_NAME']) || !isset($_ENV['DB_USER']) || !isset($_ENV['DB_PASSWORD']) || !isset($_ENV['DB_PORT'])) {
    die('Les variables d\'environnement de connexion à la base de données ne sont pas définies');
} else {
    try {
        // Appelle la méthode connectDB pour établir la connexion à la base de données
        $dbh = Dbh::connectDB();
        // Si la connexion est réussie, affiche un message de confirmation
        echo "Connexion à la base de données réussie !";
    } catch (PDOException $e) {
        // Si une erreur se produit pendant la connexion, affiche un message d'erreur
        die("Erreur DB : " . $e->getMessage());
    }
}
