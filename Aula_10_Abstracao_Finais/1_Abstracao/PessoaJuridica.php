<?php

include_once './Pessoa.php';

class PessoaJuridica extends Pessoa{
    
    private $Cnpj;
    
    public function __construct($Cnpj,$Nome) {
        $this->Cnpj = $Cnpj;
        $this->Nome = $Nome;
    }

    
    public function MostrarTodasInformacoes() {
        print "CNPJ: {$this->Cnpj} - Nome: {$this->Nome} ";
    }

}
