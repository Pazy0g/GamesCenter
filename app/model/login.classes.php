<?php

use games\model\Dbh;

class Login extends Dbh
{
    protected function getUser($uid, $pwd)
    {
        // Prépare une requête pour récupérer le mot de passe de l'utilisateur correspondant à l'identifiant ou à l'adresse e-mail fourni
        $stmt = $this->connectDB()->prepare('SELECT users_pwd 
        FROM users WHERE users_uid
        = ? OR users_email = ?;');

        // Vérifie si la requête n'a pas été exécutée avec succès, puis redirige vers la page d'accueil avec un message d'erreur approprié
        if (!$stmt->execute(array($uid, $uid))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        // Récupère les données de connexion sous forme de tableau associatif
        $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Si aucun utilisateur n'a été trouvé, redirige vers la page de connexion avec un message d'erreur approprié
        if (count($loginData) == 0) {
            $stmt = null;
            header("location: login.php?error=usernotfound");
            exit();
        }

        // Récupère le mot de passe haché de la base de données et vérifie si le mot de passe fourni est correct
        $pwdHashed = $loginData[0]["users_pwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        // Si le mot de passe est incorrect, redirige vers la page d'accueil avec un message d'erreur approprié
        if ($checkPwd == false) {
            $stmt = null;
            header("Location: ../index.php?error=wrongpassword");
            exit();
        }

        // Si le mot de passe est correct, prépare une requête pour récupérer toutes les données utilisateur et les stocke dans une variable de session
        elseif ($checkPwd == true) {
            $stmt = $this->connectDB()->prepare('SELECT * 
        FROM users WHERE (users_uid = ? 
        OR users_email = ?) 
        AND users_pwd = ?;');

            // Vérifie si la requête n'a pas été exécutée avec succès, puis redirige vers la page d'accueil avec un message d'erreur approprié
            if (!$stmt->execute(array($uid, $uid, $pwdHashed))) {
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed");
                exit();
            }

            // Récupère toutes les données utilisateur sous forme de tableau associatif et les stocke dans des variables de session
            $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["userid"] = $loginData[0]["users_id"];
            $_SESSION["useruid"] = $loginData[0]["users_uid"];

            // Libère la variable de requête
            $stmt = null;
        }
    }
}
