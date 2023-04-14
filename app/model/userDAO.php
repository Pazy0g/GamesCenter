<?php

namespace games\model;

class UserDAO extends Dbh
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = Dbh::connectDB();
    }

    public function save(User $user)
    {
        $stmt = $this->dbh->prepare("INSERT INTO users (username, email, pwd) VALUES (?, ?, ?)");
        $stmt->bindValue(1, $user->getUsername());
        $stmt->bindValue(2, $user->getEmail());
        $stmt->bindValue(3, password_hash($user->getPassword(), PASSWORD_DEFAULT));
        $stmt->execute();
    }

    public function delete(User $user)
    {
        $stmt = $this->dbh->prepare("DELETE FROM users WHERE user_id = ?");
        $stmt->bindValue(1, $user->getId());
        $stmt->execute();
    }

    public function getByUsername($username)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bindValue(1, $username);
        $stmt->execute();

        $row = $stmt->fetch();

        if (!$row) {
            return null;
        }

        $user = new User($row['user_id'], $row['username'], $row['email'], $row['pwd']);

        return $user;
    }

    public function getByEmail($email)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bindValue(1, $email);
        $stmt->execute();

        $row = $stmt->fetch();

        if (!$row) {
            return null;
        }

        $user = new User($row['user_id'], $row['username'], $row['email'], $row['pwd']);

        return $user;
    }
}
