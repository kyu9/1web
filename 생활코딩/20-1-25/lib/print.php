<?php
  function printTitle(){
    if(isset($_GET['id'])){
      echo htmlspecialchars($_GET['id']);
    }
    else{
      echo "Welcome";
    }
  }

  function printDescription(){
    if(isset($_GET['id'])){
    echo htmlspecialchars(file_get_contents('data/'.$_GET['id']));
    }
    else {
      echo "made by kD";
    }
  }

  function printList(){
    $list = scandir('./data');
    $i=0;
    while($i<count($list)){
      $title = htmlspecialchars($list[$i]);
      if($list[$i]!='.'){
        if($list[$i] != '..'){
          echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
        }
      }
      $i=$i+1;
    }
  }
 ?>
