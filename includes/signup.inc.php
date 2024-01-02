<?php

if (isset($_POST["submit"])) {

    // Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instantiate SignupContr class
    include_once "../classes/dbh.classes.php";
    include_once "../classes/signup.classes.php";
    include_once "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}