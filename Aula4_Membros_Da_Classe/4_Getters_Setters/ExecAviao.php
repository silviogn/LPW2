<?php



include_once './Aviao4.php';

$aviao = new Aviao4(35);

print "{$aviao->GetNumeroDePassageiros()} <br>";

$aviao->SetNumerDePassageiros(500);

print "{$aviao->GetNumeroDePassageiros()} <br>";