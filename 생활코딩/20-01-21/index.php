<?php
  function printTitle(){
    if(isset($_GET['id'])){
      echo $_GET['id'];
    }
    else{
      echo "Welcome";
    }
  }

  function printDescription(){
    if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
    }
    else {
      echo "Hello php!";
    }
  }

  function printList(){
    $list = scandir('./data');
    $i=0;
    while($i<count($list)){
      if($list[$i]!='.'){
        if($list[$i] != '..'){
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
      }
      $i=$i+1;
    }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      printTitle();
       ?>
     </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
     <?php
        printList();
      ?>
    </ol>

    <a href="create.php">Write</a>

    <a href="modify.php?id=<?php $_GET['id'] ?>">Modify</a>


    <br><br>



    <h2>
      <?php
        printTitle();
       ?>
    </h2>

    <?php
      printDescription();
    ?>
  </body>
</html>
