<?php

include_once './Funcionario.php';

$f1 = new Funcionario("Alberto", "Roberto", 100);
print $f1->getSobreNome()." - ".$f1->getSalarioMensal()*12;
print "<br>";
$f1->setSalarioMensal($f1->getSalarioMensal()*1.11);
print $f1->getSobreNome()." - ".$f1->getSalarioMensal()*12;
print "<br>";


$f2 = new Funcionario("Juan", "Gilberto", 200);
print $f2->getSobreNome()." - ".$f2->getSalarioMensal()*12;
print "<br>";
$f2->setSalarioMensal($f2->getSalarioMensal()*1.11);
print $f2->getSobreNome()." - ".$f2->getSalarioMensal()*12;
print "<br>";


$f3 = new Funcionario("Alberto", "Roberto", 600);
print $f3->getSobreNome()." - ".$f3->getSalarioMensal()*12;
print "<br>";
$f3->setSalarioMensal($f3->getSalarioMensal()*1.11);
print $f3->getSobreNome()." - ".$f3->getSalarioMensal()*12;
print "<br>";