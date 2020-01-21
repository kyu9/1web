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
    echo file_get_contents("data/".$_GET['id']);}
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
<style>

</style>
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
    <?php if(isset($_GET['id'])){?>
          <a href="index.php?id=<?=$_GET['id']?>">Modify</a>
      <?php }?>

    <br><br>
    <input type="button" value="Delete"><br><br>

    <form action="create_process.php" method="post">
      <input type="hidden" name="old_title">
      <p><input type="text" name="title" placeholder="이름"></p>
      <p><textarea name="description" placeholder="내용"></textarea></p>
      <p><input type="submit"></p>
    </form>


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
