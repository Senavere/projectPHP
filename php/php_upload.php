<?php

if (is_post_request()) {

$picFolder = 'posts/';

$picFileName = $_FILES['uploadfile']['name'];
$tmpFile = $_FILES['uploadfile']['tmp_name'];
$content = $_POST['content'];
$title = $_POST['title'];

$postFile = $picFolder . $picFileName;

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