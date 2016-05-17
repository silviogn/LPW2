<?php


class Produto {
    private $codigo;
    private $nome;
    private $fornecedor;
     
    public function __construct($codigo, $nome,$fornecedor) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->fornecedor = $fornecedor;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }
    
    public function ImprimirInformacoes(){
        print "Produto: {$this->codigo} - {$this->nome} - Fornecedor:"
        . "{$this->fornecedor->getCodigo()} - {$this->fornecedor->getNome()} <br>";
    }

}
