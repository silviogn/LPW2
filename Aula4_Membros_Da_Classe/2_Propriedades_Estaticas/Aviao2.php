<?php

class Aviao2 {
    
    /**
     *ImprimirLugaresOcupados
     * @var type 
     * Propriedades estática são atributos de uma classe; 
     * são dinâmicas como as propriedades de um objeto, mas estão
     *  relacionadas com a classe. Como a classe é a estrutura comum 
     * a todos os objetos dela derivados, propriedades estáticas são 
     * compartilhadas entre todos os objetos de uma classe. 
     */
    static $LugaresOcupados = 0;
    
    
    public function ImprimirLugaresOcupados(){
        self::$LugaresOcupados++;        
        print "Lugares Ocupados:".self::$LugaresOcupados."<br>";
    }
       
}

