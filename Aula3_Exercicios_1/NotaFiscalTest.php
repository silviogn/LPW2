<?php

include_once './NotaFiscal.php';
//$notaFiscal = new NotaFiscal(null, "José da Silva", 2.5);
    


$notaFiscal = new NotaFiscal(100, "José da Silva", 2.5);
$notaFiscal->AdicionarItem(1, 300, "Sabão Liquido", 30, 1.5);
$notaFiscal->AdicionarItem(2, 300, "Sabão2 Liquido2", 30, 1.5);
$notaFiscal->AdicionarItem(3, 400, "Sabão Cheiroso", 30, 1.5);
$notaFiscal->AdicionarItem(4, 200, "Coca Cola", 3, 5);

$notaFiscal->Imprimir();



$notaFiscal->RemoverItem(4);
$notaFiscal->Imprimir();