<?php

class Cliente {
    
    private $Codigo;
    private $Nome;
    
    public function __construct($Codigo, $Nome) {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
    }

    public function Mostra(){
        print "Código: {$this->Codigo}  Nome: {$this->Nome}";
    }
 
}

