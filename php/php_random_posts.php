<?php
include 'php_follow.php';
$sql = $pdo->prepare('SELECT * FROM posts WHERE user_id != :userid'); /* Hämtar alla posts som inte är ens egna*/
$sql->bindValue(':userid', $_SESSION['user_id']); /* Vi använder $_SESSION för att kalla på aktuella användaren */
$sql->execute();
$posts = $sql->fetchAll(PDO::FETCH_CLASS);

if (is_post_request()) {
    $comment = $_POST['comment'];
    if (isset($comment)) {
        if (!empty($comment)) {
            $post_id = $_POST['post_id'];
            // spara kommentaren i databasen.
            $sql_insert = "INSERT INTO comments(post_id, user_id, content) VALUES ('$post_id','$userid', '$comment')";
            $pdo->query($sql_insert);
            $success = 'comment has been added';
        }
    }
}

foreach ($posts as $post) { ?>
    <div class='gallery-item'>
		<h2> <?php echo $post->user_id ?> </h2><br>
        <h2> <?php echo $post->title ?> </h2><br>
        <img class='profile-img' src='<?php echo $post->picture ?>' width='300' height='300'>
        <p> <?php echo $post->content ?></p>
        <form method="post">
            <input type="hidden" name="post_id" value="<?php echo $post->post_id ?>" />
            Comment: <input type="text" name="comment"></input>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
<?php } ?>
