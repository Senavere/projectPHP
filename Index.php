<?php

include 'navbar.php';
require_once 'php/data_connection.php';

$profileId = $_GET['id']  ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>

  <!-- STYLING FÖR SIDAN!!!!!!! -->
  <link href="css/index.css" rel="stylesheet">
  <link href="css/posts.css" rel="stylesheet">

</head>

<body>

  <main>

    <div class="container">

      <div class="gallery">

        <?php include 'php/php_showgallery.php'; ?>


      </div>

    </div>
    <!-- End of gallery -->

    <!-- End of container -->
  </main>

</body>

</html>