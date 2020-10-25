<?php

   class books{
     var $titlu;
     var $pret;

     function setTitlu($title){
       $this->titlu = $title;
     }
     function setPret($price){
       $this->pret = $price;
     }

     function getAll(){
       echo $this->titlu . " - " . $this->pret . " lei<br>";
     }
   }

   $comedie = new books;
   $romantic = new books;
   $drama = new books;

   $comedie->setTitlu("Oh, ramona");
   $romantic->setTitlu("You and me");
   $drama->setTitlu("O noapte furtunoasa");

   $comedie->setPret(20);
   $romantic->setPret(50);
   $drama->setPret(90);

   $comedie->getAll();
   $romantic->getAll();
   $drama->getAll();

?>
