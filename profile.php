<?php
require_once 'php/data_connection.php';
/* Error uppstår om du inte är inloggad mjaow*/
session_start();
    $username = $_SESSION['username'];
    $userid = $_SESSION['user_id'];
    $profileId = $_GET['id']  ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <!-- STYLING FÖR SIDAN!!!!!!! -->
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
  <!-- Inkluderar nav för styling skull -->
  <?php include("navbar.php"); ?>
<header>

<div class="container">

  <div class="profile">

    <div class="profile-image">

      <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">

    </div>

    <div class="profile-user-settings">

      <h1 class="profile-user-name"><?php echo $username; ?></h1>

      <button class="btn profile-btn"><a href="upload.php">Skapa Inlägg</a></button>
      <button class="btn profile-btn"><a href="login.php">Login</a></button>
      <button class="btn profile-btn"><a href="logout.php">Logout</a></button>

      <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>

    </div>

    <div class="profile-stats">

      <ul>
        <li><span class="profile-stat-count">164</span> posts</li>
        <li><span class="profile-stat-count">188</span> followers</li>
        <li><span class="profile-stat-count">206</span> following</li>
      </ul>

    </div>

    <div class="profile-bio">

      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit 📷✈️🏕️</p>

    </div>

  </div>
  <!-- End of profile section -->

</div>
<!-- End of container -->

</header> <!-- END om HEADER -->

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