<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION["userid"])) {
            ?>
            <li><a href="#">
                    <?php echo $_SESSION["useruid"]; ?>
                </a></li>
            <?php
        } else {
            ?>
            <li><a href="#">SIGN UP</a></li>
            <?php
        }
        ?>
    </div>

    <section>
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <p>Don't have an account yet? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdRepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-Mail">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <p>Login to your Account.</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

<style>
    * {
        color: tomato;
        background: #333;
    }

    input {
        background: beige;
        color: black;
    }
</style>