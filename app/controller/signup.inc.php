<?php

use games\model\SignupContr;

if (isset($_POST['submit'])) {
    // grabbing the datas
    $uid = htmlspecialchars($_POST['uid']);
    $email = htmlspecialchars($_POST['email']);
    $pwd = htmlspecialchars($_POST['pwd']);

    // Instantiate SignupContr class
    require '../model/dbh.classes.php';
    require '../model/signup.classes.php';
    require '../model/signup.contr.classes.php';

    $signup = new SignupContr($uid, $email, $pwd);

    // Running error handlers and user signup
    $signup->signupUser($uid, $email, $pwd);
    // Going back to the front page
    header("Location: ../view/index.php");
}
