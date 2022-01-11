<?php
/* Kollar efter errors*/
ini_set('display-errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'data_connection.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

    $pdo = connectToDB();
    $sql = $pdo->prepare('SELECT * FROM posts WHERE user_id = :userid');
        $sql -> bindValue(':userid', $_SESSION['user_id']); /* Vi använder $_SESSION för att kalla på aktuella användaren */
        $sql -> execute();
        $posts = $sql -> fetchAll(PDO::FETCH_CLASS);
        foreach($posts as $post){
            echo "<h2>".$post -> title."</h2>";
            echo "<p>".$post -> content."</p>";
            echo "<img class='profile-img' src='../".$post -> picture."' width='300' height='300'>";
        }



?>