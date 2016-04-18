<?php


include_once 'ContaCorrente.php';
include_once 'ContaPoupanca.php';


$contaCorrente = new ContaCorrente(50045, 47458, 1000, 500);
$contaCorrente->Retirar(1600);
print "<br>";
$contaCorrente->Depositar(500);
print $contaCorrente->ObterSaldo();
$contaCorrente->Retirar(1600);
print "<br>";
print $contaCorrente->ObterSaldo();

print "<br>";
print "----------------------------------------------------------";
print "<br>";

$contaSalario = new ContaPoupanca(50000, 508878, 500, "10/01/2008");
$contaSalario->Retirar(5000);
print "<br>";
$contaSalario->Depositar(5000);
$contaSalario->Retirar(1000);
print $contaSalario->ObterSaldo();


