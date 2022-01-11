<?php

require_once 'data_connection.php';
$profileId = $_GET['id']  ?? '';


    $pdo = connectToDB();
    $sql = $pdo->prepare('SELECT * FROM posts WHERE user_id = :userid');
        $sql -> bindValue(':userid', $profileId);
        $sql -> execute();
        $posts = $sql -> fetchAll(PDO::FETCH_CLASS);
        foreach($posts as $post){
            echo "<h2>".$post -> title."</h2>";
            echo "<p>".$post -> content."</p>";
            echo "<img class='profile-img' src='".$post -> picture."' width='300' height='300'>";
        }



?>