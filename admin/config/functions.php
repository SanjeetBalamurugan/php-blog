<?php



function forL()
{
  include("db.php");

  $sql = "SELECT * FROM posts";
  $query = mysqli_query($conn, $sql);
  $posts = mysqli_fetch_all($query, MYSQLI_ASSOC);
  // $json_posts = json_encode($posts);
  // $js = "
  //     <script>
  //       const posts = $json_posts;

  //       console.log(posts)
  //     </script>
  //   ";
  // echo $js;

  return $posts;
}

function postLength()
{
  return length(forL(), 'count');
}

function length($object, $type = 'size')
{
  if ($type != null || $type != 0) {
    switch ($type) {
      case 'size':
        return sizeof($object);
        break;

      case 'count':
        return count($object);
        break;

      default:
        return sizeof($object);
        break;
    }
  }

  return 0;
}

function secureData($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function splitData($data, $start, $length)
{
  return substr(secureData($data), $start, $length);
}
