<?php

    // Clasa creeata 'User'
class User{
    // Determinarea proprietatilor, ajutandu-ne de 'public' / 'prvate'
  public $email;
  public $name;
    // functia construct si atribuirea parametrilor
  public function __construct($name, $email){
    $this->email = $email;
    $this->name = $name;
  }
    // O functie oarecare de login
  public function login(){
    // Afisarea numelui si a stringului
    echo $this->name . ' logged in';
  }
}
    // Adaugarea valorilor, variabilelor
  $userTwo = new User('Andrew', 'beny@yahoo.com');
    // Afisarea
  echo $userTwo->name . '<br />';
  echo $userTwo->email . '<br />';
    // Afisarea din functie
  echo $userTwo->login();
  
?>
