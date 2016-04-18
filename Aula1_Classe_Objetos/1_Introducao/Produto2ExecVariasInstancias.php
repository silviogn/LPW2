<?php

include_once './Produto2.php';

$produto = new Produto2();
$produto->Codigo = 900;
$produto->Descricao = "Pizza";
$produto->Preco = 44.50;
$produto->Quantidade = 90;
  
$produto->ImprimeEtiqueta();

echo "<br>";

$produto2 = new Produto2();
$produto2->Codigo = 400;
$produto2->Descricao = "Coca Cola";
$produto2->Preco = 5.40;
$produto2->Quantidade = 100;
  
$produto2->ImprimeEtiqueta();



