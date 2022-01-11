<?php

include 'navbar.php';

require_once 'php/php_upload.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" accept="image/png, image/jpg, image/jpeg" name="uploadfile">
        <label for="title">Titel</label>
        <input type="text" name="title">
        <label for="content">Innehåll</label>
        <input type="text" name="content">
        <button type="submit" name="submit">Ladda upp</button>
    </form>

</body>
</html>