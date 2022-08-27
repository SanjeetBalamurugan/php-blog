<table>
  <tbody>
    <tr>
      <th></th>
      <th>Featured Image</th>
      <th>Title</th>
      <th>Content</th>
      <th>Likes</th>
      <th>Link</th>
    </tr>
    <?php foreach ($posts as $post) : ?>
      <?php if ($post) : ?>
        <?php include('models/dashboard/post/tableData.php') ?>
      <?php else : ?>
        <tr>
          <th></th>
          <th></th>
          <td>😭 Nothing To Show</td>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      <?php endif ?>
    <?php endforeach ?>
  </tbody>
</table>