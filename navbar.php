<?php

session_start();
    $username = $_SESSION['username'];

/* Skickar dig till login om du inte är inloggad*/

    if(!isset($username)){
        header("location: login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/navbar.css" rel="stylesheet">

</head>
<body>

<nav>

    <div class="nav-img">
    <a href="random_users_posts.php"><img src="logo.png" alt="logo"></a>
    </div>

    <ul>
        <li><a href="profile.php?id=<?php echo $userid; ?>">🏠</a></li>
        <li><a href="#">💗</a></li>
        <li><a href="index.php">🧭</a></li>
        <li><a href="logout.php">➡️</a></li>

    </ul>
</nav>

</body>
</html>