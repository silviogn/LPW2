<?php

<<<<<<< HEAD
include_once './AlunoAbstract.php';

class Aluno extends AlunoAbstract{
    
    
=======
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

>>>>>>> origin/master
    public function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

}
