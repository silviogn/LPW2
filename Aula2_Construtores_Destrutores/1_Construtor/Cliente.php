<?php

class Cliente {
    
    private $Codigo;
    private $Nome;
    
    /**
     * Um construtor é um método utilizado para definir o comportamento inicial de um
     * objeto, ou seja, o comportamento no momento de sua criação. O método é executado
     * automaticamente no momento em que instanciamos um objeto por meio do operador
     * new. Caso não seja definido nenhum construtor todas os atributos são
     * inicializadas com o valor null.
     * @param type $pCodigo
     * @param type $pNome
     */
    public function __construct($pCodigo, $pNome) {
        $this->Codigo = $pCodigo;
        $this->Nome = $pNome;
    }
    
    public function Mostra(){
        print "Código: {$this->Codigo}  Nome: {$this->Nome}";
    }
    
    
    
}

