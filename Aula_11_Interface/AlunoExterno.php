<?php

<<<<<<< HEAD
include_once './AlunoAbstract.php';

class AlunoExterno extends AlunoAbstract{
    
 
    private $localizacao;
    
    public function __construct($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function setResponsavel($responsavel) {
=======
include_once './IAluno.php';

class AlunoExterno implements IAluno{
    
    private $nome;
    private $responsavel;
    private $localizacao;
    
    public function __construct($nome, $responsavel, $localizacao) {
        $this->nome = $nome;
        $this->responsavel = $responsavel;
        $this->localizacao = $localizacao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setResponsavel($responsavel) {      
>>>>>>> origin/master
        if (empty($responsavel)) {
            exit("Responsavel inválido");
        }

        $this->responsavel = $responsavel;
    }

}
