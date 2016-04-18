<?php

class Vendedor {
    
    private $Codigo;
    private $Nome;
    
    public function __construct($pCodigo, $pNome) {
        $this->Codigo = $pCodigo;
        $this->Nome = $pNome;
    }
  
    /**
     * Um destrutor ou finalizador é um método especial executado, automaticamente
     * quando o objeto é desalocado da memória, quando atribuímos o valor null
     * ao objeto ou quando utilizamos a função unset(). O método destrutor pode 
     * ser utilizado para encerrar conexões ou apagar arquivos temporários.
     */
    public function __destruct() {
        $this->Codigo = null;
        $this->Nome = null;
        print "Objeto Destruido <br>";
    }
    
     public function Mostra(){
        print "Código: {$this->Codigo}  Nome: {$this->Nome} <br>";
    }
    
}
