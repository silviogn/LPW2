<?php


class Funcionario {
    private $Nome;
    private $SobreNome;
    private $SalarioMensal;
    
    public function __construct($pNome, $pSobreNome, $pSalarioMensal) {
        $this->Nome = $pNome;
        $this->SobreNome = $pSobreNome;
        $this->ValidaSalario($pSalarioMensal);
    }
    
    public function getNome() {
        return $this->Nome;
    }

    public function getSobreNome() {
        return $this->SobreNome;
    }

    public function getSalarioMensal() {
        return $this->SalarioMensal;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setSobreNome($SobreNome) {
        $this->SobreNome = $SobreNome;
    }

    public function setSalarioMensal($SalarioMensal) {
        $this->ValidaSalario($SalarioMensal);
    }

    private function ValidaSalario($pSalarioMensal){
        if ($pSalarioMensal < 0){
            $this->SalarioMensal = 0;
        }
        else {
            $this->SalarioMensal = $pSalarioMensal;
        }
    }    
}
