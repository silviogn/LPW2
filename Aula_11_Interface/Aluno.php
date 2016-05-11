<?php

include_once './AlunoAbstract.php';

class Aluno extends AlunoAbstract{
    
    
    public function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }

}
