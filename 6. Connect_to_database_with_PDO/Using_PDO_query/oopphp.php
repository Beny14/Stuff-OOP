<?php
  include 'dbh.inc.php';
  include 'user.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
  <body>
    <?php
      $object = new User;
      echo $object->getUsersWithCountCheck();
    ?>
  </body>
</html>
