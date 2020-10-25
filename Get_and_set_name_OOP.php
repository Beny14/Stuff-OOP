<?php

//     // Clasa creeata 'User'
// class User{
//     // Determinarea proprietatilor, ajutandu-ne de 'public' / 'prvate'
//   public $email;
//   public $name;
//     // functia construct si atribuirea parametrilor
//   public function __construct($name, $email){
//     $this->email = $email;
//     $this->name = $name;
//   }
//     // O functie oarecare de login
//   public function login(){
//     // Afisarea numelui si a stringului
//     echo $this->name . ' logged in';
//   }
// }
//     // Adaugarea valorilor, variabilelor
//   $userTwo = new User('Andrew', 'beny@yahoo.com');
//   $userThree = new User('Beny', 'Andrew@yahoo.com');
//     // Afisarea
//   echo $userTwo->name . '<br />';
//   echo $userTwo->email . '<br />';
//     // Afisarea din functie
//   echo $userTwo->login() . '<br />';
//
//   echo $userThree->name . '<br />';
//   echo $userThree->email . '<br />';


  class User{
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email){
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
    }

    public function concat(){
      echo 'My full name is: ' . $this->firstName . ' ' . $this->lastName . '<br />';
    }

    public function getName(){
      return $this->firstName;
    }

    public function setName($firstName){
      if (is_string($firstName) && strlen($firstName) > 1) {
        $this->firstName = $firstName;
        return "Name has been update $firstName";
      }else{
        return 'Not a valid name';
      }
    }
  }

  $UserOne = new User(40, 'Bucur', 'Andrew@yahoo.com');

  echo $UserOne->getName();
  echo $UserOne->setName();
  echo $UserOne->firstName;
























?>
