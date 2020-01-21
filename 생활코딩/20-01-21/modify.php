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
          echo "<li><a href=\"modify.php?id=$list[$i]\">$list[$i]</a></li>\n";
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


    <a href="modify.php?id=<?php $_GET['id'] ?>">Modify</a>

    <br><br>
    <form action="modify_process.php" method="post">
      <input type="hidden" name="old_title" value="<?php $_GET['id'] ?>">
      <p><input type="text" name="title" placeholder="이름" value="<?php printTitle(); ?>"></p>
      <p><textarea name="description"><?php printDescription(); ?></textarea>
      </p>
      <p><input type="submit" value="변경!"></p>
    </form>



  </body>
</html>
