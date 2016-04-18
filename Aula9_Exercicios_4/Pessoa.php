<?php


class Pessoa {
    private $Nome;
    private $Codigo;
    private $Endereco;
    private $Cidade;
    protected static $CodigoSequencia = 1;
    
    public function __construct($Nome, $Endereco, $Cidade) {
        $this->Nome = $Nome;
        $this->Codigo = self::$CodigoSequencia++;
        $this->Endereco = $Endereco;
        $this->Cidade = $Cidade;
    }

    public function AlterarNome($pNome){
            $this->Nome = $pNome;   
    }
    
    public function AlterarEndereco($pEndereco){
        $this->Endereco = $pEndereco;
    }
    
    public function MostrarInformacoes(){
        print "Código: {$this->Codigo} Nome: {$this->Nome} Endereço: {$this->Endereco} Cidade: {$this->Cidade} <br>";
    }
    
}
