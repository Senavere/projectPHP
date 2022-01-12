<?php
/* Kollar efter errors*/
ini_set('display-errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'data_connection.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
/* Kalla på denna funktion efter att SUBMIT med Method POST blivit klickad på */
function is_post_request(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        return true;
    } else {
        return false;
    }
}

if (is_post_request()) {

$picFolder = 'posts/';

$picFileName = $_FILES['uploadfile']['name'];
$tmpFile = $_FILES['uploadfile']['tmp_name'];
$content = $_POST['content'];
$title = $_POST['title'];

$postFile = $picFolder . $picFileName;

/* bilden läggs till i posts-mappen och bildlänken läggs i databasen, uppladdningen kopplas till ett user_id */

if(isset($_POST ['submit'])) {
    if(move_uploaded_file($tmpFile, $postFile)) {
        $pdo = connectToDB();
        $sql = $pdo -> prepare ("INSERT INTO posts(user_id, content, title, picture) VALUES ( :user_id , :content, :title, :picture)");
        $sql -> bindParam(":user_id", $_SESSION['user_id']);
        $sql -> bindParam(":content", $content);
        $sql -> bindParam(":title", $title);
        $sql -> bindParam(":picture", $postFile);
        $sql -> execute();
        echo "success";
    } else {
        echo 'error';
    }

}
}
?>