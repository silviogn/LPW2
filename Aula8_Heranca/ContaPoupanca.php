<?php

include_once './Conta.php';

class ContaPoupanca extends Conta{
    
    private $Aniversario;
    
    public function __construct($pAgencia, $pCodigo, $pSaldo, $pAniversario) {
        parent::__construct($pAgencia, $pCodigo, $pSaldo);
        $this->Aniversario = $pAniversario;
    }
    
    /*
     * O método da classe pai é sobrescrito.
     */
    public function Retirar($pQuantia) {
        if ($this->Saldo >= $pQuantia){
            parent::Retirar($pQuantia);
        }
        else {
            print "Retirada não permitida";
        }
    }
    
    
}
