<?php

include_once '../1_Associacao/Produto.php';

class Cesta {
    private $itens = array();
    
    function AdicionaItem($produto){
        array_push($this->itens, $produto);
    }
    
    function ExibeLista(){
        foreach ($this->itens as $item) {
            $item->ImprimirInformacoes();
        }
    }
}
