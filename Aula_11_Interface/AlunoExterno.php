<?php


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

        if (empty($responsavel)) {
            exit("Responsavel inválido");
        }

        $this->responsavel = $responsavel;
    }

}
