<?php

include_once './Cliente.php';

class CalculadorFinanceiro {

    private $cliente;

    public function __construct($cliente) {
        $this->cliente = $cliente;
    }

    public function executarCalculo() {
        try {           
           $this->cliente->CalcularDivida(90);
           print "sucesssooo"; 
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
   
            print "Ocorreu um erro tente mais tarde";
        }
    }
}
