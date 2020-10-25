<?php

   class books{
     var $titlu;
     var $pret;

     function __construct($titlu, $pret){
       $this->titlu = $titlu;
       $this->pret = $pret;
     }

     function getAll(){
       echo $this->titlu . " - " . $this->pret . " lei<br>";
     }
   }

   $comedie = new books("Oh, ramona", 20);
   $romantic = new books("You and me", 50);
   $drama = new books("O noapte furtunoasa", 90);

   $comedie->getAll();
   $romantic->getAll();
   $drama->getAll();

?>
