<?php

  class Dbh{
    private $dbServerName;
    private $dbUsername;
    private $dbPassword;
    private $dbName;

    protected function connect(){
      $this->dbServerName = "localhost";
      $this->dbUsername = "";
      $this->dbPassword = "";
      $this->dbName = "";

      $connect = new mysqli($this->dbServerName, $this->dbUsername, $this->dbPassword, $this->dbName);
      return $connect;

    }
  }
?>
