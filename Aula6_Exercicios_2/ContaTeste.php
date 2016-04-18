<?php

include_once './Conta.php';

$conta = new Conta("17584-5", "4558-5", 500, 200, "SIM");
$conta->Creditar(100);
$conta->Creditar(0);

$conta->Imprimir();


$conta->Debitar(-900);
$conta->Debitar(50);

$conta->Imprimir();