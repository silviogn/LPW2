<?php

include_once './Animal.php';

class Pelicano extends Animal {
    
    public function PrintNumeroPatas(){
        print $this->patas;
    }
}
