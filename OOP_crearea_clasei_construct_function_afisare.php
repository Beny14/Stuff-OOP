<?php

    // Clasa creeata 'User'
class User{
    // Determinarea proprietatilor, ajutandu-ne de 'public' / 'prvate'
  public $email;
  public $name;
    // Atribuirea valorilor, cu ajutorul functie construct pusa pe public
  public function __construct(){
    $this->email = 'beny@yahoo.com';
    $this->name = 'Andrew';
  }
    // O functie oarecare de login
  public function login(){
    echo 'the login user ';
  }
}
    // Creerea unei alte variabile, si unui nou user
  $userOne = new User();
    // Ne folosim de noul user, pentru a afisa functia 'login()'
  $userOne->login();
    // Ne folosim de noul user, pentru a afisa numele
  echo $userOne->name;

?>
