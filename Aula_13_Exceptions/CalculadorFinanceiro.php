<?php

include_once './Cliente.php';

class CalculadorFinanceiro {

    private $cliente;

    public function __construct($cliente) {
        $this->cliente = $cliente;
    }

    public function executarCalculo() {
        try {           
<<<<<<< HEAD
           $this->cliente->CalcularDivida(90000000);
           print "sucesssooo"; 
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            
=======
           $this->cliente->CalcularDivida(90);
           print "sucesssooo"; 
        } catch (Exception $exc) {
            //echo $exc->getTraceAsString();
   
>>>>>>> origin/master
            print "Ocorreu um erro tente mais tarde";
        }
    }
}
