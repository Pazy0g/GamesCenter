<?php
// User.php

namespace Games\model;

use Games\model\Dbh;
use PDO;
use PDOException;

class User extends Dbh
{
    private $user_id;
    private $username;
    private $email;
    private $password;
    private $user_image;
    private $is_admin;

    public function __construct($username, $email, $password, $user_image = null, $is_admin = false)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->user_image = $user_image;
        $this->is_admin = $is_admin;
    }
    public function getUserLogin()
    {
        return $this->user_id;
    }
    public static function getUserId($user_id)
    {
        $db = self::connectDB();
        $stmt = $db->prepare('SELECT * FROM users WHERE user_id = ?');
        $stmt->execute([$user_id]);

        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user_data) {
            return new self($user_data['user_id'], $user_data['username'], $user_data['email'], $user_data['password']);
        } else {
            return null;
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getUserImage()
    {
        return $this->user_image;
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function save()
    {
        $db = self::connectDB();
        $stmt = $db->prepare('INSERT INTO users (username, email, password, user_image, is_admin) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$this->username, $this->email, $this->password, $this->user_image, $this->is_admin]);
        $this->user_id = $db->lastInsertId();
    }

    public static function findByEmail($email)
    {
        $db = self::connectDB();
        $stmt = $db->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        return new User($row['username'], $row['email'], $row['password'], $row['user_image'], $row['is_admin']);
    }

    public static function findByUsername($username)
    {
        $db = self::connectDB();

        $stmt = $db->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        $user = new User($row['username'], $row['email'], $row['password'], $row['user_image'], $row['is_admin']);
        $user->user_id = $row['user_id'];
        return $user;
    }

    public function checkPassword($password)
    {
        $db = self::connectDB();
        $stmt = $db->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$this->username]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return false; // L'utilisateur n'existe pas
        }
        return password_verify($password, $row['password']);
    }

    public static function delete($user_id)
    {
        $db = self::connectDB();

        // Recherchez l'utilisateur dans la base de données par son ID
        $stmt = $db->prepare('SELECT * FROM users WHERE user_id = ?');
        $stmt->execute([$user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Supprimez l'utilisateur s'il existe
        if ($user) {
            $stmt = $db->prepare('DELETE FROM users WHERE user_id = ?');
            $stmt->execute([$user_id]);
        }
    }


    public function updateUser($user_id, $username, $email, $password)
    {
        $db = self::connectDB();

        // Vérifier si l'utilisateur existe dans la base de données
        $stmt = $db->prepare('SELECT * FROM users WHERE user_id = ?');
        $stmt->execute([$user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            return false;
        }

        // Mettre à jour les informations de l'utilisateur dans la base de données
        $stmt = $db->prepare('UPDATE users SET username = ?, email = ?, password = ? WHERE user_id = ?');
        $stmt->execute([$username, $email, password_hash($password, PASSWORD_DEFAULT), $user_id]);

        // Mettre à jour les propriétés de l'objet User actuel avec les nouvelles valeurs
        $this->username = $username;
        $this->email = $email;

        return true;
    }
}