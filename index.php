<?php
include('config/db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome to my blog</title>
  <link rel="stylesheet" href="src/css/style.css" />
  <link rel="stylesheet" href="src/css/media.css" />
</head>

<body>
  <?php include('templates/header.php'); ?>
  <br />
  <div class="main">
    <?php include('templates/posts.php'); ?>
    <?php include('templates/recentPosts.php'); ?>
  </div>
</body>

</html>