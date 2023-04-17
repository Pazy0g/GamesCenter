<?php
// User.php

namespace games\model;

class Users extends Dbh
{
    // --------------- Requête pour enregister un user ---------------
    public function newUser(string $pseudo, string $mail, string $password, $is_admin = null): void
    {
        $db = self::connectDB();

        $req = $db->prepare(
            "INSERT INTO 
        users(
          username, 
          email,
          `password`,
          is_admin
        ) 
      VALUES (:pseudo, :mail, :password, :is_admin)"
        );

        $req->execute([
            ':username' => $pseudo,
            ':email' => $mail,
            ':password' => password_hash($password, PASSWORD_DEFAULT),
            ':is_admin' => $is_admin
        ]);
    }

    // --------------- Requête pour se connecter ---------------
    public static function login(string $username): mixed
    {
        $db = self::connectDB();

        $req = $db->prepare("SELECT user_id, username, email, `password`, is_admin FROM users WHERE username = :username");
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
    // public function getAllUsers(): array
    // {
    //     $db = self::connectDB();

    //     $req = $db->prepare("SELECT id, pseudo, mail, DATE_FORMAT(created_at,'%d/%m/%Y %H:%i') AS `date`, `name` FROM users INNER JOIN `user-roles` ON `users`.id_roles = `user-roles`.id_role;");
    //     $req->execute();

    //     return $req->fetchAll();
    // }

    // // --------------- Requête pour récupérer un user par rapport à son id ---------------
    // public static function getUserById($id): array
    // {
    //     $db = self::connectDB();

    //     $req = $db->prepare("SELECT * FROM users WHERE id = :id");
    //     $req->execute([':id' => $id]);

    //     return $req->fetch();
    // }

    // // --------------- Requête pour savoir le nombre d'utilisateurs ---------------
    // public static function countUsers(): array
    // {
    //     $db = self::connectDB();

    //     $req = $db->prepare("SELECT COUNT(id) AS nb FROM users");
    //     $req->execute();

    //     return $req->fetch();
    // }
}
