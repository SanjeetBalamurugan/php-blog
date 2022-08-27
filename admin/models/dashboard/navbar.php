<?php
if (!isset($_POST['submit']) && isset($_COOKIE['username'])) {
  unset($_COOKIE['username']);
  setcookie('username', '', time() - 3600);
}
?>

<body>
  <div class="navbar">
    <nav>
      <a href="#">phpHyperAdmin</a>
      <ul>
        <li id="profile">Profile</li>
        <li>About</li>
      </ul>
    </nav>
    <div id="profileExpand">
      <div>
        <a href="#" id="close" class="nls red">X Close</a>
        <hr>
      </div>
      <div>
        <form action="<?php echo secureData($_SERVER['PHP_SELF']) ?>">
          <button type="submit" class="nls bttn">Logout</button>
        </form>
      </div>
    </div>
  </div>
  <script>
    const profile = document.getElementById("profile");
    const profileExpand = document.getElementById("profileExpand");
    const close = document.getElementById("close");

    close.addEventListener('click', () => {
      profileExpand.classList.remove("active");
    })
    profile.addEventListener('click', () => {
      profileExpand.classList.add("active");
    })
  </script>
</body>