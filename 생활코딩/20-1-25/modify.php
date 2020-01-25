<?php
  require_once('lib/print.php');
  require_once('lib/top.php');
  ?>
    <a href="modify.php?id=<?= $_GET['id'] ?>">Modifying...</a><br>
    <h2>
    <form action="modify_process.php" method="post">
      <input type="hidden" name="old_title" value="<?= $_GET['id'] ?>">
      <p><input type="text" name="title" placeholder="이름" value="<?php printTitle(); ?>"></p>
      <p><textarea name="description"><?php printDescription(); ?></textarea>
      </p>
      <p><input type="submit" value="변경!"></p>
    </form>
    <h5>
      
    </body>
    </html>
