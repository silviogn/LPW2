<?php

class Conta {
    
    public $Agencia;
    public $Codigo;
    public $DataCriacao;
    public $Titular;
    public $Saldo;
    public $Cancelada;
    
    function Retirar($quantia){
        if ($quantia > 0 && $this->Saldo >= $quantia){
            $this->Saldo -= $quantia;
        }
    }
    
    function Depositar($quantia){
        if ($quantia > 0 && $quantia <= 2000 ){
            $this->Saldo += $quantia;
        }
    }
    
    function ObterSaldo(){
        return $this->Saldo;
    }
    
}
