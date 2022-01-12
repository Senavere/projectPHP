<?php
require_once 'php/php_init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random posts</title>
  <!-- STYLING FÖR SIDAN!!!!!!! -->
  <link href="css/index.css" rel="stylesheet">
</head>

<body>
  <!-- Inkluderar nav för styling skull -->
  <?php include("navbar.php"); ?>
  <header>

    <div class="container">

      <div class="gallery">

        <?php include 'php/php_random_posts.php'; ?>

      </div>

    </div>
    <!-- End of gallery -->

    <!-- End of container -->
    </main>
</body>

</html>
