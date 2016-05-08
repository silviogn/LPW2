<?php

include_once './Cliente.php';

try {
    $cliente = new Cliente();
    $cliente->CalcularDivida(900000);
} catch (Exception $exc) {
    print "Ocorreu um erro <br>";
} finally {
    print "Passou finally";
}

