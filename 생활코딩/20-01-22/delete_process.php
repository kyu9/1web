<?php
  unlink('data/'.$_POST['title']);
  header('Location: /index.php');
 ?>
