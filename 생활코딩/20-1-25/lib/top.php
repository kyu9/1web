<?php require_once('lib/print.php'); ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="lib/topStyle.css">
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
    <grid>
    <ol>
     <?php
        printList();
      ?>
    </ol>
    <div id="manual"><p>
      <div id="mtitle">사용설명서...</div><br>
      원하는 링크를 누르면 아래에 설명이 나옴!<br>
      &nbsp;새로운 파일 생성: <br>&emsp; ㄴCreate을 누르시오!<br><br>
      &nbsp;원하는 파일 편집: <br>&emsp; ㄴModify를 누르시오!<br><br>
      &nbsp;원하는 파일 삭제: <br>&emsp; ㄴ파일을 누르고 Delete를 누르<br>&emsp;시오!<br>
      <br>
      <input type="button" value="To Main" onclick="location.href='index.php'" id="escapeB">
    </p></div>
  </grid>
</body>
</html>
