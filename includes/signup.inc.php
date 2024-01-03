<?php

if (isset($_POST["submit"])) {

    // Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    // Instantiate SignupContr class
    include_once "../classes/dbh.class.php";
    include_once "../classes/signup.class.php";
    include_once "../classes/signup-contr.class.php";
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}