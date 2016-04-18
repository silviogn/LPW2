<?php

include_once './Pessoa.php';

class PessoaFisica extends Pessoa {

    private $Cpf;
    private $NumeroFilhos;
    private $TipoSanguineo;
    
    public function __construct($Cpf, $NumeroFilhos, $TipoSanguineo,$Nome, $Endereco, $Cidade) {
        parent::__construct($Nome, $Endereco, $Cidade);
        $this->Cpf = $Cpf;
        $this->NumeroFilhos = $NumeroFilhos;
        $this->TipoSanguineo = $TipoSanguineo;
    }

    public function MostrarInformacoes() {
        parent::MostrarInformacoes();
        print "CPF: {$this->Cpf} Número Filhos: {$this->NumeroFilhos} Tipo Sanguíneo: {$this->TipoSanguineo} <br>";
    }
}
