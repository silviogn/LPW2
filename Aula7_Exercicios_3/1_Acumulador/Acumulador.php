<?php


class Acumulador {
    private $Valor;
    
    public function __construct() {
        $this->Valor = 0;
    }
    
    public function Zerar(){
        $this->Valor = 0;
    }
    
    public function Incrementar(){
        $this->Valor++;
    }
    
    public function Valor(){
        return $this->Valor;
    }
    
    
}
