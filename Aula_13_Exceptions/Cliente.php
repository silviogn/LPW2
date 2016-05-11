<?php


class Cliente {
    
    private $saldo = 900;
    
    public function CalcularDivida($desconto){
        
        if ($desconto > $this->saldo) {
<<<<<<< HEAD
            
            throw new  Exception("Desconto não pode ser maior que saldo");
            
=======
            throw new 
            Exception("Desconto não pode ser maior que saldo");
>>>>>>> origin/master
        }

        return $this->saldo - $desconto;
        
    }
    
    
}
