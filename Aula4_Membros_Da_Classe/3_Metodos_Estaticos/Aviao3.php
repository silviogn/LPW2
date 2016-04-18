<?php

class Aviao3 {
    
    const MarcaModelo = "Ford -Boeing 777";
    
    /*
     * Métodos estáticos podem ser invocados diretamente da classe, 
     * sem a necessidade de instancias um objeto para isso.
     */
    public static function ImprimirLugaresOcupados(){
        print "Lugares Ocupados:".self::MarcaModelo."<br>";
    }
       
}

