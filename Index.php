<?php

include 'navbar.php';

$profileId = $_GET['id']  ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link href="css/index.css" rel="stylesheet">

</head>
<body>

    <div class="gallery-pic">
        <?php include 'php/php_showgallery.php'; ?>
    </div>

</body>
</html>