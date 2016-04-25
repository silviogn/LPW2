<?php

include_once './Animal.php';

class Cachorro extends Animal{
   
    public function MostrarNome(){
        print $this->Nome;
    }
    
}
