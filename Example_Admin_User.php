<?php
  class Member{

    public $username;
    public $email;
    public $password;
    public $role = "Member";

    public function __construct($username, $email, $password){
      $this->username = $username;
      $this->email = $email;
      $this->password = $password;
    }

    public function getValue(){
      return $this->username . ' ' . $this->email . ' ' . $this->password;
    }
  }

  class Admin extends Member{
    public $role = "Admin";

    public function __construct($username, $email, $password){
      parent::__construct($username, $email, $password);
    }

    public function getMessage(){
      return "<strong>$this->username</strong>, an admin, is the best of weekend!";
    }

    public function getValueAdm(){
      return $this->username . ' ' . $this->email . ' ' . $this->password;
    }
  }

  $userMember_1 = new Member('Andrei', 'Andrei@yahoo.com', 'test123');
  $userAdmin_1 = new Admin('Alex', 'Alex@yahoo.com', 'test123');
  $userMember_2 = new Member('Beny', 'Beny@yahoo.com', 'test123');
  $userMember_3 = new Member('George', 'George@yahoo.com', 'test123');

  echo "<strong>$userMember_1->role</strong>" . " " . $userMember_1->getValue() . "<br>";
  echo "<hr>";
  echo "<strong>$userAdmin_1->role</strong>" . " " . $userAdmin_1->getValueAdm() . "<br>";
  echo "<hr>";
  echo "<strong>$userMember_2->role</strong>" . " " . $userMember_2->getValue() . "<br>";
  echo "<hr>";
  echo "<strong>$userMember_3->role</strong>" . " " . $userMember_3->getValue() . "<br>";
  echo "<hr>";
  echo $userAdmin_1->getMessage() . " " . "<strong>" . $userAdmin_1->getValue() . "</strong><br>";

?>
