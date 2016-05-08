<?php

include_once './CalculadorFinanceiro.php';
include_once './Cliente.php';

$cliente = new Cliente();

$calculadorFinanceiro = new CalculadorFinanceiro($cliente);
$calculadorFinanceiro->executarCalculo();



