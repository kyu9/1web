<?php
  file_put_contents('data/'.$_POST['title'], $_POST['discription']);
  header('Location: /index.php?id='.$_POST['title']);
 ?>
