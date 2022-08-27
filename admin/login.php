<?php
include('config/_variables.config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login To <?php
                  if ($blogName == null) {
                    echo 'blog';
                  } else {
                    echo $blogName;
                  }
                  ?></title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/_font.config.css">
  <link rel="stylesheet" href="css/_colors.css">
</head>

<body>
  <?php include('models/_login.body.php'); ?>
</body>

</html>