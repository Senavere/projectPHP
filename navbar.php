<?php
session_start();
    $username = $_SESSION['username'];
    $userid = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="css/navbar.css" rel="stylesheet">

</head>
<header>
    <nav>
        <img src="img/logo.jpg" alt="logo">
        <?php echo $username; ?>

        <ul>
            <li><a href=".html">Hem</a></li>
            <li><a href=".html">...</a></li>
            <li><a href=".html">...</a></li>
            <li><a href=".html">...</a></li>

        </ul>
    </nav>
</header>