<?php

include_once './Cliente.php';

try {
    $cliente = new Cliente();
    $cliente->CalcularDivida(90000000);
    print "Operacao OK.";
} catch (Exception $exc) {
    print "Ocorreu um erro <br>";
} finally {
    print "Passou finally";
}

