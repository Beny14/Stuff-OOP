<?php

  class User{
    public $username;
    protected $email;
    public $role = "member";

    public function __construct($username, $email){
      $this->username = $username;
      $this->email = $email;
    }

    public function getEmail(){
      return $this->email;
    }

    public function getMessage(){
      return "$this->username send a message";
    }
  }

  class AdminUser extends User{
    public $level;
    public $role = "admin";

    public function __construct($username, $email, $level){
      $this->level = $level;
      parent::__construct($username, $email);
    }

    public function getMessage(){
      return "$this->email , an admin, send a message";
    }
  }

  $userOne = new User('Beny', 'beny@yahoo.com');
  $userThree = new User('Marcu', 'cu arcu@yahoo.com');
  $userTwo = new AdminUser('Alex', 'alex@yahoo.com', 5);

  echo $userOne->username . '<br>';
  echo $userOne->getEmail() . '<br>';
  echo $userOne->role . " " . $userOne->getMessage() . '<br>';
  echo "<hr>";
  echo $userThree->username . '<br>';
  echo $userThree->getEmail() . '<br>';
  echo $userThree->role . " " . $userThree->getMessage() . '<br>';
  echo "<hr>";
  echo $userTwo->username . '<br>';
  echo $userTwo->getEmail() . '<br>';
  echo $userTwo->level . '<br>';
  echo $userTwo->role . " " . $userTwo->getMessage() . '<br>';

?>
