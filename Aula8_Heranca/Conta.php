<?php
/*
 * Classe base para o exemplo de He
 */
class Conta {
    protected $Agencia;
    protected $Codigo;
    protected $Saldo;
    
    public function __construct($pAgencia, $pCodigo, $pSaldo) {
        $this->Agencia = $pAgencia;
        $this->Codigo = $pCodigo;
        $this->Saldo = $pSaldo;
    }
    
    
    public function Retirar($pQuantia){
        if ($pQuantia > 0){
            $this->Saldo-=$pQuantia;
        }
    }
    
    
    public function Depositar($pQuantia){
        if ($pQuantia > 0){
            $this->Saldo+=$pQuantia;
        }
    }
    
    public function ObterSaldo(){
        return $this->Saldo;
    }
 
}
