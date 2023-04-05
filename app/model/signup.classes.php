<?php

namespace games\model;

use games\model\Dbh;
use PDO;
use PDOException;

class Signup extends Dbh
{
    protected function setUser($uid, $email, $pwd)
    {
        // Prépare la requête d'insertion en base de données avec des placeholders pour les valeurs à insérer
        $stmt = $this->connectDB()->prepare('INSERT INTO users (username, email, pwd) VALUES (?,?,?);');

        // Hash le mot de passe avant de l'insérer en base de données
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        // Exécute la requête préparée en remplaçant les placeholders par les valeurs à insérer
        if (!$stmt->execute(array($uid, $email, $hashedPwd))) {
            $stmt = null;
            // Redirige l'utilisateur vers la page d'accueil avec un message d'erreur en cas d'échec de l'exécution de la requête
            header("Location: ../view/index.php?error=stmtfailed");
            exit();
        }
        // Ferme la connexion à la base de données
        $stmt = null;
    }

    protected function checkUser($uid, $email)
    {
        // Prépare la requête de sélection en base de données avec des placeholders pour les valeurs à sélectionner
        $stmt = $this->connectDB()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');

        // Exécute la requête préparée en remplaçant les placeholders par les valeurs à sélectionner
        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            // Redirige l'utilisateur vers la page d'accueil avec un message d'erreur en cas d'échec de l'exécution de la requête
            header("Location: ../view/index.php?error=stmtfailed");
            exit();
        }

        /* 
        Vérifie si le nombre de résultats renvoyés par la requête est supérieur à 0
        si false l'utilisateur ne figure pas dans la base de données, si true il s'y trouve
        */

        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        // Retourne le résultat de la vérification
        return $resultCheck;
    }
}
