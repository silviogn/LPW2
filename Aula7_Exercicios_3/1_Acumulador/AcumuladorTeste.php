<?php

include_once './Acumulador.php';

$acumulador = new Acumulador();
$acumulador->Incrementar();
$acumulador->Incrementar();
print $acumulador->Valor();