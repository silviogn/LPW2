<?php

include_once './Conta.php';

class ContaCorrente extends Conta{
    private $Limite;
    
    public function __construct($pAgencia, $pCodigo, $pSaldo, $pLimite) {
        parent::__construct($pAgencia, $pCodigo, $pSaldo);
        $this->Limite = $pLimite;
    }
    
    
    public function Retirar($pQuantia) {
        if ($this->Limite+$this->Saldo >= $pQuantia){
            parent::Retirar($pQuantia);
        }
        else {
            print "Retirada não permitida";
        }
    }
}
