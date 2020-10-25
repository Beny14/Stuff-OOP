<?php

  class User extends Dbh{

    public function getAllUsers(){
      $stmt = $this->connect()->query("SELECT * FROM user");

      while ($row = $stmt->fetch()) {
        $username = $row['username'];
        return $username;
      }
    }

    public function getUsersWithCountCheck(){
      $user_id = 1;
      $username = "Beny";

      $stmt = $this->connect()->prepare("SELECT* FROM user WHERE user_id=? AND username=?");
      $stmt->execute([$user_id, $username]);

      if ($stmt->rowCount()) {
        while ($row = $stmt->fetch()) {
          return $row['username'];
        }
      }
    }
  }
?>
