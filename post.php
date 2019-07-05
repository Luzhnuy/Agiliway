<?php
 include($_SERVER['DOCUMENT_ROOT']."agiliway/config/db.php");

 function division($sum,$count){
   if ($count < 1){
     throw new Exception("Division by zero");
   }
   return $sum/$count;
 }


 $num = 3;
 $page = $_GET['page'];
 $id = $_GET['id'];
 $post = R::getRow("SELECT * FROM post WHERE id=".$id);
 $responses = R::getAll("SELECT * FROM responses WHERE post_id=".$id);
 $count  = count($responses);
 $total = intval(($count - 1) / $num) + 1;
 $page = intval($page);
 if(empty($page) or $page < 0) $page = 1;
  if($page > $total) $page = $total;

 $start = $page * $num - $num;

 $responses = R::getAll("SELECT * FROM responses WHERE post_id=$id LIMIT $start, $num");
 $sum = 0;
 foreach ($responses as $key ) {
   $sum = $sum + $key['rate'];
 }
 try{
  $rate = division($sum, $count);
}
catch(Exception $e) {
  $rate = 0;
}
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

          <h2><?=$post['title']; ?> <span style="color:red;"><?=$rate; ?></span></h2>
          <p><?=$post['body']; ?></p>
      </div>
      <div class="responses">
        <h3>Вiдгуки</h3>
        <?php foreach($responses as $response): ?>
          <div class="response">
            <div class="r">
              <p style="color:red;"><?=$response['rate'];?></p>
              <p><?=$response['body'];?></p>
              <?php if($response['img']): ?>
                <img style="width:20%;" src="<?=$response['img']; ?>">
              <?php endif; ?>
            </div>
          </div>
          <hr>
        <?php endforeach; ?>
       <?php
        $pervpage = "";
        $nextpage = "";
        $page1left = "";
        $page2left = "";
        $page1right = "";
        $page2right = "";
        if ($page != 1) {
            $pervpage = '<a href= ./post.php?id='.$id.'&page=1><<</a>
                          <a href= ./post.php?id='.$id.'&page='. ($page - 1) .'><</a> ';
        }

        if ($page != $total) {
            $nextpage = ' <a href= ./post.php?id='.$id.'&page='. ($page + 1) .'>></a>
                          <a href= ./post.php?id='.$id.'&page=' .$total. '>>></a>';
        }

        if($page - 2 > 0){
          $page2left = ' <a href= ./post.php?id='.$id.'&page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
        }
        if($page - 1 > 0){
          $page1left = '<a href= ./post.php?id='.$id.'&page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';
        }
        if($page + 2 <= $total) {
          $page2right = ' | <a href= ./post.php?id='.$id.'&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
        }
        if($page + 1 <= $total){
          $page1right = ' | <a href= ./post.php?id='.$id.'&page='. ($page + 1) .'>'. ($page + 1) .'</a>';
        }


        echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;

     ?>
      </div>
      <br>
      <div class="add_response">
        <h3>Залиште вiдгук</h3>
        <form action="app/save_reponse.php" method="POST" enctype="multipart/form-data">
          <div class="rate">
            <label for="rate">Оцiнка: </label>
            <input type="radio" name="rate" value="1">
            <input type="radio" name="rate" value="2">
            <input type="radio" name="rate" value="3">
            <input type="radio" name="rate" value="4">
            <input type="radio" name="rate" value="5">
          </div>
          <br>
          <div class="body">
            <label for="body">Добавте текст</label>
            <input type="text" name="body">
          </div>
          <div class="img">
            <input type="file" name="img" >

          </div>
          <input type="number" style="display:none;" name="post_id" value="<?=$id; ?>">
          <div class="sbmt">
            <input type="submit" value="Вiдправити">
          </div>

        </form>
      </div>
  </body>
</html>
