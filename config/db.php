<?php
  include($_SERVER['DOCUMENT_ROOT']."agiliway/plugins/rb.php");
  $user = "agiliway";
  $password = "toor";
  $dbname = "agiliway";
  $host = "localhost";

  R::setup("mysql:host=$host;dbname=$dbname", $user, $password);



?>
