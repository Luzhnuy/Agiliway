<?php
  include($_SERVER['DOCUMENT_ROOT']."agiliway/config/conf.php");
  include($_SERVER['DOCUMENT_ROOT']."agiliway/plugins/rb.php");

  R::setup("mysql:host=$host;dbname=$dbname", $user, $password);



?>
