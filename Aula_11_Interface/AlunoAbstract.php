<?php

 include_once 'IAluno.php';

abstract class AlunoAbstract implements IAluno {
    
    private $nome;
    private $responsavel;
    
    
     public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public abstract function setResponsavel($responsavel);
    
}
