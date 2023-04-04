<?php


namespace games\model;

use games\model\Signup;

class SignupContr extends Signup
{
    private $uid;
    private $email;
    private $pwd;


    public function __construct($uid, $email, $pwd)
    {
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            // echo "Empty input!";
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() == false) {
            // echo "Invalid Username!";
            header("Location: ../index.php?error=username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            // echo "Invalid Email!";
            header("Location: ../index.php?error=email");
            exit();
        }

        if ($this->uidTakenCheck() == false) {
            // echo "Username or email taken!";
            header("Location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->email, $this->pwd);
    }

    private function emptyInput()
    {
        if (
            empty($this->uid) ||
            empty($this->pwd) ||
            empty($this->email)
        ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid()
    {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck()
    {
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
