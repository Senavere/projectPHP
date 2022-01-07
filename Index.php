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
    <title>Homepage</title>

    <link href="css/login-register.css" rel="stylesheet">

</head>
<body>
    <h1>Homepage</h1>
    <?php echo $username; ?>
    <a href="login.php">Login</a>
    <a href="logout.php">Logout</a>
    <a href="register.php">Register</a>
</body>
</html>