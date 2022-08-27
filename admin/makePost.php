<?php
include('config/functions.php');
include('config/db.php');

error_reporting(0);

forL();

echo postLength() + 1;

if ($_POST != null) {
  $title = secureData($_POST['title']);
  $content = secureData($_POST['content']);
  $id = postLength() + 1;

  if (isset($_POST['submit'])) {
    $statusMsg = '';

    $targetDir = "images/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
        mysqli_query($conn, "INSERT INTO posts (id, title, content, featuredImage) VALUES ('$id' , '$title', '$content', '" . $fileName . "')");
      } else {
        $statusMsg = "Sorry, there was an error uploading your file.";
      }
    } else {
      $statusMsg = 'Please select a file to upload.';
    }
    // "<script></script>"


    // upload("images/", "upload");
    echo $title;
    echo $content;
    print_r($_POST);
    if (mysqli_query($conn, $sql) == true) {
      echo "New Post created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create a new post</title>
  <link rel="stylesheet" href="css/_font.config.css">
  <link rel="stylesheet" href="css/makePost.css">
</head>

<body>
  <form enctype="multipart/form-data" action="makePost.php" method="POST">
    <h1>Create A New Post</h1>
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required><br>
    <label for="content">Content:</label>
    <input type="search" name="content" id="content" required><br>
    <label for="image">Featured Image: </label>
    <input type="file" id="file" name="file" required><br>
    <button type="submit" id="submit" name="submit">Add Post</button>
  </form>
</body>

</html>

<?php include('config/db_free.php'); ?>