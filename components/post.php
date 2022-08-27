<div class="post">
  <form action='/blog/details.php?id=<?php echo htmlspecialchars($post['id']); ?>' method="post">
    <?php if ($post['featuredImage'] == null) : ?>
      <img src="#" alt="Featured Image">
    <?php else : ?>
      <img class="image" src="<?php echo "admin/images/" . htmlspecialchars($post['featuredImage']) ?>" alt="<?php echo htmlspecialchars($post['featuredImage']) ?>">
    <?php endif; ?>
    <h1 id="title"><?php echo htmlspecialchars($post['title']); ?></h1>
    <p><?php $content = substr(htmlspecialchars($post['content']), 0, 25);
        echo $content, "..."; ?></p>
    <p><small><?php echo htmlspecialchars($post['likes']); ?></small></p>
    <button type="submit">Read Full Post</button>
  </form>
</div>