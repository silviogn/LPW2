<?php


abstract class Pessoa {
    
    protected $Nome;
    
    public abstract function MostrarTodasInformacoes();
    
    public function MostrarNome(){
        print $this->Nome." <BR>";
    }
    
}
