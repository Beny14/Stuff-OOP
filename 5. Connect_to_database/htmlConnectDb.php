<?php
  include 'dbh.inc.php';
  include 'user.inc.php';
  include 'viewuser.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
  <body>
    <?php
      $users = new ViewUser();
      $users->showAllUsers(); 
    ?>
  </body>
</html>
