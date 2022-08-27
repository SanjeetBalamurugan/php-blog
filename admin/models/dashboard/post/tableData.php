<tr>
  <th><?php echo secureData($post['id']) ?></th>
  <th><?php echo secureData($post['featuredImage']) ?></th>
  <th><?php echo secureData($post['title']) ?></th>
  <td><?php echo splitData($post['content'], 0, 44), "..." ?></td>
  <th><?php echo secureData($post['likes']) ?></th>
  <th><a class="nls" href="<?php
                            $id = secureData($post['id']);
                            echo "/blog/details.php?id=$id";
                            ?>">Read</a></th>
</tr>