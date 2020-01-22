<?php
  require_once('lib/print.php');
  require_once('lib/top.php');
  ?>
  <h2>
    <a href="create.php">Create</a> or
    <a href="modify.php?id=<?= $_GET['id'] ?>">Modify</a><br>
    <form action="delete_process.php" method="post">
      <input type="hidden" name="title" value="<?= $_GET['id'] ?>">
      <input type="submit" value="삭제!">
    </form></h2>
    <h3></h3>
    <h4>
    <?php
        printTitle();
    ?><br><br>
    <?php
      printDescription();
    ?></h4>



<?php require('lib/bottom.php'); ?>
