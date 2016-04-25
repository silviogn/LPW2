<?php

include_once './Pessoa.php';

class PessoaFisica extends Pessoa{

    private $Cpf;
    
    public function __construct($Cpf,$Nome) {
        $this->Cpf = $Cpf;
        $this->Nome = $Nome;
    }

    
    public function MostrarTodasInformacoes() {
        print "Cpf: {$this->Cpf} - Nome: {$this->Nome} <BR>";
    }

}
