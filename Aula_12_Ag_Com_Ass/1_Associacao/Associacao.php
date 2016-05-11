<?php

/* 
 * Associação é a relação mais comum entre dois objetos, de modo
 * que um possui uma referência em memória onde o outro se encontra, podendo
 * visualizar seus atributos ou mesmo acionar uma de suas funcionalidades.
 */


include_once './Produto.php';
include_once './Forncedor.php';


$fornecedor = new Forncedor();
$fornecedor->setCodigo(100);
$fornecedor->setNome("Liberdade LTDA.");

$produto = new Produto(540, "Batata Frita", $fornecedor);

print "Produto: {$produto->getCodigo()} - {$produto->getNome()} - "
. "Fornecedor: {$produto->getFornecedor()->getCodigo()} "
. " - {$produto->getFornecedor()->getNome()}";