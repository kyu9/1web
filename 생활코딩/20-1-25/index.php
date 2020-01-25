
<?php
  require_once('lib/print.php');
  require_once('lib/top.php');
  ?>

  <link rel="stylesheet" href="lib/indexStyle.css">

  <div id="mysidenav" class="sidenav">
    <a href="#" class="closebtn" onclick="closeNav()"></q>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clinets</a>
    <a href="#">Contact</a>
  </div>

  <span class="openmenu" onclick='openNav()'><i class="fa fa-angle-double-left-fa-5" aria-hidden="true"></i></span>

  <script>
  function openNav(){
    document.getElementById('mysidenav').style.width='250px';
    //document.getElementById('main').style.marginLeft='250px';
    document.body.style.backgroundColor = 'rgba(0,0,0,0,4)';
  }
  function closeNav(){
    document.getElementById('mysidenav').style.width='0';
    //documnet.getElementById('main').style.marginLeft='250px';
    document.body.style.backgroundColor = "lightblue";
  }
  </script>

  <h2>(
    <input type="button" name="Create" value="Create!" onclick="location.href='create.php'" id="button1">
    )(
    <input type="button" name="Modify" value="Modify!"
    onclick="location.href='modify.php?id=<?= $_GET['id']?>'" id="button1"> )
    <br>
    <form action="delete_process.php" method="post">
      <input type="hidden" name="title" value="<?= $_GET['id'] ?>">
      <input type="submit" value="삭제!" id="Dbutton">
    </form></h2>
    <h3></h3>
    <h4>
      <div id=showD>
        <div id="showT">
    <?php
        printTitle();
    ?></div><br><br>
    <?php
      printDescription();
    ?></div></h4>

  </body>
  </html>
