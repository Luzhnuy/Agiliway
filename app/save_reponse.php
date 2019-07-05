  <?php
  include($_SERVER['DOCUMENT_ROOT']."agiliway/config/db.php");


  if($_POST){
    $rate = $_POST['rate'];
    $body = $_POST['body'];
    $images = $_FILES['img']['tmp_name'];
    $gimages = [];
    $post_id = $_POST['post_id'];

    if($images){
      $uid = md5(uniqid(rand(),1));


      if(move_uploaded_file($images, '../src/img/'.$uid.'.jpg')){
        $gimages = 'src/img/'.$uid.'.jpg';
      }
    }

    $responses = R::dispense('responses');
    $responses->rate = $rate;
    $responses->body = $body;
    $responses->post_id = $post_id;
    if($images){
      $responses->img=$gimages;
    }
    R::store($responses);

    header("Location: ../post.php?id=".$post_id."&page=1");
  } else {
		echo "Sorry but request method must be a post";
	}
?>
