 <?php

include_once './Pessoa.php';
include_once './Conta.php';


$pessoa1 = new Pessoa();
$pessoa1->Codigo = 10;
$pessoa1->Nome = "Carlos da Silva";
$pessoa1->Escolaridade = "Ensino Médio";

echo "{$pessoa1->Nome} é formado em {$pessoa1->Escolaridade} <br>";
$pessoa1->Formar("Técnico em Informática");
echo "{$pessoa1->Nome} é formado em {$pessoa1->Escolaridade} <br>";
        
echo "--------------------------------- <br>";

$conta1  = new Conta();
$conta1->Agencia = 10020;
$conta1->Codigo = 944435;
$conta1->Titular = "Carlos da Silva";
$conta1->Saldo = 100.90;

echo "Conta: {$conta1->Agencia} - {$conta1->Codigo} Saldo: {$conta1->Saldo} <br>";
$conta1->Retirar(1000);
echo "Conta: {$conta1->Agencia} - {$conta1->Codigo} Saldo: {$conta1->Saldo} <br>";
$conta1->Retirar(50);
echo "Conta: {$conta1->Agencia} - {$conta1->Codigo} Saldo: {$conta1->Saldo} <br>";
