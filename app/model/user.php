<?php
// User.php

namespace games\model;

class User extends Dbh
{
    private $id;
    private $username;
    private $email;
    private $password;

    public function __construct($id, $username, $email, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function save()
    {
        // Code pour enregistrer l'utilisateur dans la base de données
        // Ici, vous pouvez utiliser une connexion PDO pour effectuer des requêtes SQL
    }

    public static function getByUsername($username)
    {
        // Code pour récupérer un utilisateur à partir de son nom d'utilisateur
        // Ici, vous pouvez utiliser une connexion PDO pour effectuer des requêtes SQL
    }

    public static function getByEmail($email)
    {
        // Code pour récupérer un utilisateur à partir de son adresse email
        // Ici, vous pouvez utiliser une connexion PDO pour effectuer des requêtes SQL
    }
}
