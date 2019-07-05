<?php
 include($_SERVER['DOCUMENT_ROOT']."agiliway/config/db.php");
 $posts = R::getAll("SELECT * FROM post");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> test agiliway </title>

  </head>
  <body>
    <h1>All posts</h1>

    <?php foreach($posts as $post): ?>
      <div>
        <a href="post.php?id=<?=$post['id'] ?>&page=1">
          <h2><?=$post['title']; ?></h2>
          <p><?=$post['body']; ?></p>
        </a>
      </div>
    <?php endforeach; ?>

  </body>
</html>
