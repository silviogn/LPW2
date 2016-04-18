<?php
include_once './Vendedor.php';
$vendedor = new Vendedor(500,"José Alberto Venda");
$vendedor->Mostra();
$vendedor = null;



$vendedor = new Vendedor(500,"José Alberto Venda");
$vendedor->Mostra();
unset($vendedor);