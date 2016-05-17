<?php

/* 
 * Agregação é o tipo de relação entre objetos conhecidos como todo/parte.
 * Na agregação, um objeto agrega outro objeto, ou seja, torna
 * um objeto externo parte de si mesmo pela utilização de um dos seus 
 * métodos. Assim, o objeto pai poderá utilizar funcionalidades do agregado.
 * Nessa relação, um objeto poderá agregar uma ou muitas instâncias de um 
 * outro objeto.
 */


include_once '../1_Associacao/Forncedor.php';
include_once '../1_Associacao/Produto.php';
include_once './Cesta.php';

$fornecedor1 = new Forncedor();
$fornecedor1->setCodigo(1);
$fornecedor1->setNome("Liberdade LTDA.");

$fornecedor2 = new Forncedor();
$fornecedor2->setCodigo(2);
$fornecedor2->setNome("Cocoa LTDA.");


$produto1 = new Produto("100", "Batata Frica", $fornecedor1);
$produto2 = new Produto("101", "Bolacha", $fornecedor2);
$produto3 = new Produto("102", "Carne", $fornecedor1);


$cesta = new Cesta();
$cesta->AdicionaItem($produto1);
$cesta->AdicionaItem($produto2);
$cesta->AdicionaItem($produto3);
$cesta->ExibeLista();
$cesta = null;
print "---------";
$produto3->ImprimirInformacoes();