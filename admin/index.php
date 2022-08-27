<?php
include('config/functions.php');
include('config/_variables.config.php');

if (!isset($_COOKIE['username'])) {
  echo "
      <script>window.location.href = '$root/admin/login.php'</script>
    ";
}

include('config/db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/_font.config.css">
  <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
  <?php include('views/dashboard.view.php') ?>
</body>

</html>

<?php
include('config/db_free.php');
?>