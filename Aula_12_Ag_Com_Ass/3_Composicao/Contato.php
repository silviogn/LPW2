<?php

class Contato {

    private $nome;
    private $telefone;
    private $email;

    public function SetContato($nome, $telefone, $email){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }
    
    public function GetContato(){
        print "Nome: {$this->nome}, Telefone: {$this->telefone},"
        . " Email: {$this->email} ";
    }
}
