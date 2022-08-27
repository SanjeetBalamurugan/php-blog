<?php
include('config/functions.php');

$user = $pw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = secureData($_POST['user']);
  $pw = secureData($_POST['pw']);
}

?>

<body style="<?php echo 'images/';
              echo $imgBg;
              echo '.';
              echo $imgBgExt; ?>">
  <div class="form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
      <p id="alerts">
        <?php
        if ($user != null and $pw != null) {
          if ($user != $admin) {
            echo 'Error: 401( User not found )';
          } else if ($pw != $password) {
            echo 'Error: 401( Password doesn&#39t match )';
          } else {
            setcookie("username", $user);
            echo "
              <script>window.location.href = '/blog/admin/'</script>
            ";
          }
        }
        ?>
      </p>
      <h1>phpHyperAdmin</h1>
      <label for="user">UserName</label>
      <input type="text" name="user" id="userField" placeholder="enter your name" />
      <label for="user">Password</label>
      <input type="password" name="pw" id="pwField" placeholder="enter your password" />
      <br>
      <button type="submit" name="submit">
        Login
      </button>
    </form>
  </div>
  <script>
  </script>
</body>