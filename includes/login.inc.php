<?php

if (isset($_POST["submit"])) {

    // Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantiate SignupContr class
    include_once "../classes/dbh.classes.php";
    include_once "../classes/login.classes.php";
    include_once "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);

    // Running error handlers and user signup
    $login->loginUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}