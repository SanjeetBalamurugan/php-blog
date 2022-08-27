<?php
include('config/db.php');

if (isset($_GET['id'])) {
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  $sql = "SELECT * FROM posts WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  $post = mysqli_fetch_assoc($result);
}

include('config/db_free.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Details</title>
  <script src="src/js/details.js" defer></script>
  <link rel="stylesheet" href="src/css/style.css" />
  <link rel="stylesheet" href="src/css/media.css" />
</head>

<body>
  <?php include('templates/header.php'); ?>
  <br />
  <?php if ($post) : ?>
    <?php include('components/detail.php'); ?>
  <?php else : ?>
    <h1>Error 404 Not Found</h1>
  <?php endif; ?>
</body>

</html>