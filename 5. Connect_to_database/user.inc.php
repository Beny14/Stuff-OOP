<?php

  class User extends Dbh{

    protected function getAllUsers(){
      $sql = "SELECT * FROM user;";
      $result = $this->connect()->query($sql);
      $checkResult = $result->num_rows;

      if ($checkResult > 0) {
        while ($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }
    }
  }
?>
