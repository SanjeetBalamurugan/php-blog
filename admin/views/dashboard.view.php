<body>
  <?php include('models/dashboard/navbar.php') ?>
  <main>
    <div>
      <?php include('models/dashboard/posts.php') ?>
    </div>
    <div class="right">
      <a href="<?php $url = explode('/', $_SERVER['PHP_SELF'], -1);
                echo "/", $url['1'], "/", $url['2'], "/", "makePost.php" ?>" class="btn">Make A Post</a>
    </div>
  </main>
</body>