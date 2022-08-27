<?php

$content = $post['content'];
echo "<pre>";
echo $content;
if (substr_replace($content, "&lt;br&gt;", 2)) {
  echo "yes";
} else {
  echo "no";
}
echo "</pre>";

?>

<div class="postDetail">
  <!-- <a href="/blog/index.php" class="btn">⬅Back</a> -->
  <?php if ($post['featuredImage'] == null) : ?>
    <img src="sql/images/<?php echo '#' ?>.jpeg" alt="Featured Image">
  <?php else : ?>
    <img class="image" src="<?php echo "admin/images/" . htmlspecialchars($post['featuredImage']) ?>" alt="<?php echo htmlspecialchars($post['featuredImage']) ?>">
  <?php endif; ?>
  <div class="tDetails">
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
  </div>
  <p class="likeCount"><small><?php echo htmlspecialchars($post['likes']); ?></small></p>
  <div class="content">
    <p><?php echo htmlspecialchars($post['content']); ?></p>
  </div>
</div>