<?php

include_once './Produto2.php';

$produto = new Produto2();
$produto->Codigo = 900;
$produto->Descricao = "Pizza";
  
$produto->ImprimeEtiqueta();



