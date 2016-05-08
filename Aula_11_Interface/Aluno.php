<?php

include_once './IAluno.php';

class Aluno implements IAluno{
    
    private $nome;
    private $responsavel;
    
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

}
