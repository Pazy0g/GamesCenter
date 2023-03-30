<?php
if (isset($_POST['submit'])) {
    // grabbing the datas
    $uid = htmlspecialchars($_POST['uid']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $pwdRepeat = htmlspecialchars($_POST['pwdrepeat']);
    $email = htmlspecialchars($_POST['email']);

    // Instantiate SignupContr class
    include '../classes/dbh.classes.php';
    include '../classes/signup.classes.php';
    include '../classes/signup.contr.classes.php';
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // Running error handlers and user signup
    $signup->signupUser();
    // Going back to the front page
    header("Location: ../index.php?error=none");
}
