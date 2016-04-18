<?php

class Aviao {
    
    const Modelo = "Boeing 777";
    const Turbinas = 2;
    const Lugares = 300;
      
    
    public function ImprimirCaracteristicas(){
        print "Modelo: ".self::Modelo." - Turbinas: ".self::Turbinas." - Lugares: ".self::Lugares;
    }
       
}

