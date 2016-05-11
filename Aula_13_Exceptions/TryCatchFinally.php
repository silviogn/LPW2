<?php

include_once './Cliente.php';

try {
    $cliente = new Cliente();
<<<<<<< HEAD
    $cliente->CalcularDivida(7);
=======
    $cliente->CalcularDivida(900000);
>>>>>>> origin/master
} catch (Exception $exc) {
    print "Ocorreu um erro <br>";
} finally {
    print "Passou finally";
}

