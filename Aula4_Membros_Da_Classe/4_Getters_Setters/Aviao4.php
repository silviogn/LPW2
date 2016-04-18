<?php

class Aviao4 {
    
    private $NumerDePassageiros = 0;
    
    
    public function __construct($pNumeroDePassageiros) {
        $this->NumerDePassageiros = $pNumeroDePassageiros;
    }
    
    public function GetNumeroDePassageiros(){
        return $this->NumerDePassageiros;
    }
    
    public function SetNumerDePassageiros($pNumeroDePassageiros){
        $this->NumerDePassageiros = $pNumeroDePassageiros;
    }
       
    public function Imprimir(){
        print "Passageiros: {$this->NumerDePassageiros}";
    }
}

