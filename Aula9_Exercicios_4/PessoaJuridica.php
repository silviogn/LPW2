<?php

include_once './Pessoa.php';

class PessoaJuridica extends Pessoa {

    private $Cnpj;
    private $NumeroFuncionarios;
    
    public function __construct($Cnpj, $NumeroFuncionarios,$Nome, $Endereco, $Cidade) {
        parent::__construct($Nome, $Endereco, $Cidade);
        $this->Cnpj = $Cnpj;
        $this->NumeroFuncionarios = $NumeroFuncionarios;
    }

    public function MostrarInformacoes() {
        parent::MostrarInformacoes();
        print "Cnpj: {$this->Cnpj} Número Func: {$this->NumeroFuncionarios} <br>";
    }
    
}
