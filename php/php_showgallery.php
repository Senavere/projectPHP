<?php
/* Kollar efter errors*/
ini_set('display-errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'data_connection.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    /* Vi hämtar posts från databasen och printar ut på vald sida */

    $pdo = connectToDB();
    $sql = $pdo->prepare('SELECT * FROM posts WHERE user_id = :userid');
        $sql -> bindValue(':userid', $_SESSION['user_id']); /* Vi använder $_SESSION för att kalla på aktuella användaren */
        $sql -> execute();
        $posts = $sql -> fetchAll(PDO::FETCH_CLASS);

        if (is_post_request()) {
            if (array_key_exists('add_comment', $_POST)) {
                $comment = $_POST['comment']; // The actual comment
                // Spara inte kommentaren i databasen ifall den är tom.
                if (!empty($comment)) {
                    $post_id = $_POST['post_id'];
                    // spara kommentaren i databasen.
                    $sql_insert = "INSERT INTO comments(post_id, user_id, content) VALUES ('$post_id','$userid', '$comment')";
                    $pdo->query($sql_insert);
                    $success = 'comment has been added';
                }
            } else if (array_key_exists('delete_comment', $_POST)) {
                $comment_id = $_POST['comment_id'];
                $stmt = $pdo->prepare("DELETE FROM comments WHERE comment_id = :id");
                $stmt->bindValue(':id', $comment_id);
                $deleted = $stmt->execute();
                $success = $deleted ? "The comment was deleted." : "The comment could not be deleted.";
            }
        }

        foreach ($posts as $post) {
            // $posts innehåller endast 1 post.
            // $post har i detta fall post_id = 2
            // Varje kommentar har en kolumn för vilket post den tillhör.
            // Vi vill hämta alla kommentarer för detta inlägg ($post) (post_id = 2).
            $sql_select_posts = "SELECT * FROM comments WHERE post_id = $post->post_id";
            $comments = $pdo->query($sql_select_posts)->fetchAll(PDO::FETCH_CLASS);

            $sql_get_user = "SELECT * FROM users INNER JOIN posts ON users.user_id = posts.user_id WHERE posts.post_id = $post->post_id";
            $user = $pdo->query($sql_get_user)->fetchAll(PDO::FETCH_CLASS);
            $user = array_values($user)[0];
        ?>
            <div class='gallery-item'>
                <div class="top">
                    <h1 style="display: inline-block;"><?php echo $user->username ?></h1>
                    <h2> <?php echo $post->title ?> </h2>
                </div>
                <img class='profile-img' src='<?php echo $post->picture ?>'>
                <p class="text"> <?php echo $post->content ?></p>
                <div class="comments">
                    <?php foreach ($comments as $comment) {
                        $sql_get_commenting_user = "SELECT users.username FROM users INNER JOIN comments ON users.user_id = comments.user_id WHERE comments.comment_id = $comment->comment_id";
                        $user = $pdo->query($sql_get_commenting_user)->fetchAll(PDO::FETCH_CLASS);
                        $user = array_values($user)[0];
                    ?>
                        <div class="comment-container">
                            <div class="user-comment">
                                <span style="font-weight: bold;"><?php echo  $user->username; ?></span>
                                <?php echo $comment->content ?>
                            </div>
                            <form class="delete-form" method="post">
                                <input type="hidden" name="comment_id" value="<?php echo $comment->comment_id ?>" />
                                <input class="delete" type="submit" name="delete_comment" value="delete">
                            </form>
                        </div>
                    <?php } ?>

                </div>
                <form method="post">
                    <input type="hidden" name="post_id" value="<?php echo $post->post_id ?>" />
                    <input class="comment" type="text" name="comment" maxlength="100" placeholder="Add a comment..."></input>
                    <input class="submit" type="submit" name="add_comment" value="send">
                </form>
            </div>
        <?php } ?>
