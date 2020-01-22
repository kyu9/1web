<?php require_once('lib/print.php'); ?>
<!DOCTYPE html>
<html>
<style>
  body{
    background-color: lightblue;
    margin:0;
  }

  h1{
    font-size:50px;
    background-color:lightgreen;
    text-align:center;
    margin:0;
    padding-bottom:20px;
    border-bottom:3px solid black;
  }
  h2, h3, h4{
    margin-left:16px;
    margin-right:16px;
  }
  grid{
    display:grid;
    grid-template-columns: 3fr 1fr;
    margin-left: 16px;
    margin-right: 16px;
  }
  #manual{
    margin-top:16px;
    padding-top:0;
    background-color: red;
    border:3px solid black;
  }
  #mtitle{
    text-align:center;
    background-color: yellow;
  }
  #gohome{
    text-align:left;
  }
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
    <grid>
    <ol>
     <?php
        printList();
      ?>
    </ol>
    <div id="manual"><p>
      <div id="mtitle">사용설명서...</div><br>
      &nbsp;새로운 파일 생성: <br>&emsp; ㄴCreate을 누르시오!<br>
      &nbsp;원하는 파일 편집: <br>&emsp; ㄴModify를 누르시오!<br>
      &nbsp;원하는 파일 삭제: <br>&emsp; ㄴ파일을 누르고 Delete를 누르<br>&emsp;시오!<br>
      <br><br><br>
      <a href="index.php" #id="gohome">홈으로 돌아가기</a>
    </p></div>

  </grid>
