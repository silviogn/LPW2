<?php


class Cliente {
    
    private $saldo = 900;
    
    public function CalcularDivida($desconto){
        
        if ($desconto > $this->saldo) {
            
            throw new  Exception("Desconto não pode ser maior que saldo");
            
        }

        return $this->saldo - $desconto;
        
    }
    
    
}
