<?php

  class User{
    public $username;
    private $email;

    public function __construct($username, $email){
      $this->username = $username;
      $this->email = $email;
    }

    public function addUser(){
      return "$this->email added user";
    }

    public function getProp(){
      return $this->username . "<br>" . $this->email;
    }

    public function setEmail($email){
      if (strpos($email, '@') > -1){
      return $this->email = $email;
      }else{
        return 'Email is not avaible';
      }
    }
  }


class AdminUser extends User{
  public $level;

  public function __construct($username, $email, $level){
    $this->level = $level;
    parent::__construct($username, $email);
  }
}

  $userOne = new User('Beny', 'Beny@yahoo.com');
  $userTwo = new User('Andrei', 'Andrei@yahoo.com');
  $userThree = new AdminUser('Alex', 'Alex@yahoo.com', 5);

  echo $userThree->getProp() . '<br>';
  echo $userThree->level;

?>
