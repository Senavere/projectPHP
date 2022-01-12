<?php
require_once 'php/php_init.php';
require_once 'php/php_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="css/login-register.css" rel="stylesheet">

</head>

<body class="login-body">

    <main class="login-main">

        <img src="logo.png" alt="logo">

        <h3 class="login-second-header">Login</h3>

        <form class="login-form" method="post" action="login.php">

            <div class="login-input">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username here..." require>
            </div>

            <div class="login-input">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password here..." require>
            </div>

            <div class="login-btns">
                <button type="submit" name="submit" class="login-btn">Continue</button>
                <a href="register.php"><button type="confirm" class="login-btn">Register</button></a>
            </div>

            <?= "<h3>$error</h3>" ?>

        </form>

    </main>

</body>

</html>

</body>
</html>