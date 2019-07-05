<?php
 include($_SERVER['DOCUMENT_ROOT']."agiliway/config/db.php");
 $id = $_GET['id'];
 $post = R::getRow("SELECT * FROM post WHERE id=".$id);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> test agiliway </title>

    <style>
    body{
      text-align: center;
    }


    </style>
  </head>
  <body>
      <div>

          <h2><?=$post['title']; ?></h2>
          <p><?=$post['body']; ?></p>
      </div>
      <div class="responses">
        <h3>Вiдгуки</h3>
        <div class="response">

        </div>
      </div>
      <div class="add_response">
        <h3>Залиште вiдгук</h3>
        <form action="app/save_response.php" method="POST">
          <input type="radio" name="rate">
          <input type="radio" name="rate">
          <input type="radio" name="rate">
          <input type="radio" name="rate">
          <input type="radio" name="rate">


        </form>
      </div>
  </body>
</html>
