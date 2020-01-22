<?php
  require_once('lib/print.php');
  require_once('lib/top.php');
  ?>
<style>
  #plus{

  }
</style>
    <a href="create.php">How to Create:</a><br>
    <div id="plus"><mark>이름과 설명을 적고 생성버튼을 누르세요!</mark></div>

    <form action="create_process.php" method="post">
      <p><input type="text" name="title" placeholder="이름"></p>
      <p><textarea name="description" placeholder="내용"></textarea></p>
      <p><input type="submit" value="생성!"></p>
    </form>

    <h5>

<?php require('lib/bottom.php'); ?>
