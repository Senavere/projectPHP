<?php
    require_once 'php/php_register.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="css/login-register.css" rel="stylesheet">

</head>
<body class="register-body">

    <main class="register-main">

        <h1 class="register-header">Register</h1>

        <form class="register-form" method="post" action="register.php" >

            <div class="register-input">
                <div>
                    <label>Username*</label>
                </div>
                <input type="text" name="username" placeholder="Enter a Username" require>
            </div>

            <div class="register-input">
                <div>
                    <label>Email Address*</label>
                </div>
                <input type="email" name="email" placeholder="Enter your email" require>
            </div>

            <div class="register-input">
                <div>
                    <label>Password*</label>
                </div>
                <input type="password" name="password" placeholder="Enter a Password" require>
            </div>

            <div class="register-input">
                <div>
                    <label>Confirm Password*</label>
                </div>
                <input type="password" name="confpassword" placeholder="Confirm Password" require>
            </div>

            <div class="register-btns">
                <button type="submit" name="submit" class="register-btn">Submit</button>
                <a href="login.php"> <button type="confirm" class="register-btn">Back</button> </a>
            </div>

            <?= "<h3>$error</h3>" ?>
            <?= "<h3>$success</h3>" ?>

        </form>

    </main>

</body>
</html>