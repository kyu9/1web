<?php
  require_once('lib/print.php');
  require_once('lib/top.php');
  ?>
<style>
  #plus{font-size: 25px;}
  #active{padding-left:10px;}
  #name{font-size: 15px;}
  #discript{font-size:20px;}
</style>
<div id="active">
    <a href="create.php">How to Create:</a><br>
    <div id="plus"><mark>이름과 설명을 적고 생성버튼을 누르세요!</mark></div>

    <form action="create_process.php" method="post">
      <p><input type="text" name="title" placeholder="이름" id="name"></p>
      <p><textarea name="description" placeholder="내용" id="descript" rows='5' cols='40'></textarea></p>
      <p><input type="submit" value="생성!"></p>
    </form>
</div>
    <h5>
</body>
</html>
