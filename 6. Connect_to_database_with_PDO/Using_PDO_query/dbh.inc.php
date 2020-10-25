<?php

  class Dbh{
    private $dbServerName;
    private $dbUsername;
    private $dbPassword;
    private $dbName;
    private $charset;

    public function connect(){
      $this->dbServerName = "localhost";
      $this->dbUsername = "";
      $this->dbPassword = "";
      $this->dbName = "";
      $this->charset = "utf8mb4";

      try {
        $dsn = "mysql:host=" . $this->dbServerName . ";dbname=" . $this->dbName . ";charset=" . $this->charset;
        $pdo = new PDO($dsn, $this->dbUsername, $this->dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
      } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }


    }
  }

?>
