<?php
// User.php

namespace games\model;

class Users extends Dbh
{
    // --------------- Requête pour enregister un user ---------------
    public function createUser(string $username, string $email, string $password, $user_image = null, $is_admin = 0): void
    {
        $db = self::connectDB();

        $req = $db->prepare(
            "INSERT INTO 
        users(
          username, 
          email,
          password,
          user_image,
          is_admin
        ) 
      VALUES (:username, :email, :password, :user_image, :is_admin)"
        );

        $req->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
            ':user_image' => $user_image,
            ':is_admin' => $is_admin
        ]);
    }

    // --------------- Requête pour se connecter ---------------
    public static function login(string $username): mixed
    {
        $db = self::connectDB();

        $req = $db->prepare("SELECT user_id, username, password, is_admin FROM users WHERE username = :username");
        $req->execute([':username' => $username]);

        return $req->fetch();
    }


    // --------------- Requête pour mettre à jour un user ---------------
    public function updateUser($username, $email, $user_id): void
    {
        $db = self::connectDB();

        $req = $db->prepare(
            "UPDATE users SET 
        username = :username,
        email = :email
      WHERE user_id = :user_id"
        );

        $req->execute([
            ':username' => $username,
            ':email' => $email,
            ':user_id' => $user_id
        ]);
    }

    // --------------- Requête pour supprimer un user ---------------
    public function deleteUser($user_id): void
    {
        $db = self::connectDB();

        $req = $db->prepare("DELETE FROM users WHERE user_id = :user_id");
        $req->execute([':user_id' => $user_id]);
    }

    // --------------- Requête pour récupérer tous les users ---------------
    public function getAllUsers(): array
    {
        $db = self::connectDB();

        $req = $db->prepare("SELECT user_id, username, email, user_image, is_admin FROM users");
        $req->execute();

        return $req->fetchAll();
    }

    // --------------- Requête pour récupérer un user par rapport à son id ---------------
    public static function getUserById($user_id): array
    {
        $db = self::connectDB();

        $req = $db->prepare("SELECT * FROM users WHERE user_id = :user_id");
        $req->execute([':user_id' => $user_id]);

        return $req->fetch();
    }

    // --------------- Requête pour savoir le nombre d'utilisateurs ---------------
    public static function countUsers(): array
    {
        $db = self::connectDB();

        $req = $db->prepare("SELECT COUNT(user_id) AS nb FROM users");
        $req->execute();

        return $req->fetch();
    }
}
