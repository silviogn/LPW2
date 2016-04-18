<?php

include_once './Produto.php';

$produto = new Produto();

$produto->Codigo = 900;
$produto->Descricao = "Pizza";
$produto->Preco = 44.50;
$produto->Quantidade = 90;
  
var_dump($produto);