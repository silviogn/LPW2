<?php

include_once './Estado.php';

$estado = new Estado("Rio Grande do Sul");
$estado->AdicionarMunicipio("Livramento", 1000, 90000);
$estado->AdicionarMunicipio("Bage", 5000, 1000000);
$estado->AdicionarMunicipio("Rivera", 500, 3500000);

print $estado->AreaTotal();
print "<br>";
print $estado->PopulacaoTotal();
print "<br>";
print print_r($estado->MenorMunicipio());
print "<br>";
print print_r($estado->MaiorMunicipio());

print "<br>";
print print_r($estado->MenorPopulacao());

print "<br>";
print print_r($estado->MaiorPopulacao());

print "<br>";
print $estado->DiferencaMaiorMenor();