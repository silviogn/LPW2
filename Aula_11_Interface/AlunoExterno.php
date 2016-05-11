<?php

include_once './AlunoAbstract.php';

class AlunoExterno extends AlunoAbstract{
    
 
    private $localizacao;
    
    public function __construct($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function setResponsavel($responsavel) {
        if (empty($responsavel)) {
            exit("Responsavel inválido");
        }

        $this->responsavel = $responsavel;
    }

}
