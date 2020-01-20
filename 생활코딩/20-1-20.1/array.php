<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $alpha = array('a', 'b' , 'c', 'd');
    echo $alpha[1].'<br>';
    array_push($alpha, 'e');
    $i=0;
    while($i<count($alpha)){
      echo $alpha[$i].'<br>';
      $i=$i+1;
    }
    ?>
  </body>
</html>
