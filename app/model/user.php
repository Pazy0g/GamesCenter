<?php
// User.php

namespace games\model;
use PDO;
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

    public function getUserId()
    {
        return $this->user_id;
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
        return new User($row['username'], $row['email'], $row['password'], $row['user_image'], $row['is_admin']);
    }

    public function checkPassword($password)
    {
        return password_verify($password, $this->password);
    }
}
