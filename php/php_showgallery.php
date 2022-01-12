<?php

$sql = $pdo->prepare('SELECT * FROM posts WHERE user_id = :userid');
$sql->bindValue(':userid', $_SESSION['user_id']); /* Vi använder $_SESSION för att kalla på aktuella användaren */
$sql->execute();
$posts = $sql->fetchAll(PDO::FETCH_CLASS);
foreach ($posts as $post) {
    echo "<div class='gallery-item'><h2>" . $post->title . "</h2><br>";
    echo "<img class='profile-img' src='" . $post->picture . "' width='300' height='300'>";
    echo "<p>" . $post->content . "</p></div>";
}
