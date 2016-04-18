<?php


class Animal {
    
    protected $Nome;
    
    public function __construct($Nome) {
        $this->Nome = $Nome;
    }
    
    public final function MostrarNome(){
        print $this->Nome;
    }

    
}
