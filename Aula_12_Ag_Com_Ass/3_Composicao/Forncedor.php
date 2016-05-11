<?php

include_once './Contato.php';

class Forncedor {

    private $codigo;
    private $nome;
    private $contato;

    public function __construct($codigo, $nome) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->contato = new Contato();
    }
    
    public function AtribuirContato($nome, $telefone, $email){
        $this->contato->SetContato($nome, $telefone, $email);
    }
    
    public function ExibirContato(){
        $this->contato->GetContato();
    }
}
