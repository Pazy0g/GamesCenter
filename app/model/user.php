<?php
// User.php

namespace games\model;

class User extends Dbh
{

    private $username;
    private $email;
    private $pwd;

    public function __construct($username, $email, $pwd)
    {
        $this->username = $username;
        $this->email = $email;
        $this->pwd = $pwd;
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
        return $this->pwd;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($pwd)
    {
        $this->pwd = $pwd;
    }
}
