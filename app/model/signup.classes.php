<?php

use Dbh\database\Dbh;

class Signup extends Dbh
{
    protected function setUser($uid, $pwd, $email)
    {
        // Prépare la requête d'insertion en base de données avec des placeholders pour les valeurs à insérer
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?,?,?);');

        // Hash le mot de passe avant de l'insérer en base de données
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        // Exécute la requête préparée en remplaçant les placeholders par les valeurs à insérer
        if (!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            // Redirige l'utilisateur vers la page d'accueil avec un message d'erreur en cas d'échec de l'exécution de la requête
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
        // Ferme la connexion à la base de données
        $stmt = null;
    }

    protected function checkUser($uid, $email)
    {
        // Prépare la requête de sélection en base de données avec des placeholders pour les valeurs à sélectionner
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

        // Exécute la requête préparée en remplaçant les placeholders par les valeurs à sélectionner
        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            // Redirige l'utilisateur vers la page d'accueil avec un message d'erreur en cas d'échec de l'exécution de la requête
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        // Vérifie si le nombre de résultats renvoyés par la requête est supérieur à 0
        if ($stmt->rowCount() > 0) {
            $resultCheck = false; // L'utilisateur existe déjà en base de données
        } else {
            $resultCheck = true; // L'utilisateur n'existe pas encore en base de données
        }

        // Retourne le résultat de la vérification
        return $resultCheck;
    }
}
