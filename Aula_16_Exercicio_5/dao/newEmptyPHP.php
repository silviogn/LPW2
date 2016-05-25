<?php

include_once '../model/Paciente.php';
include_once './SexoPersistence.php';
include './TipoSanguineaoPersistence.php';
include './PacientesPersistence.php';

$p = new SexoPersistence();
//print_r($p->GetAll());


$r  = new TipoSanguineaoPersistence();
////print_r($r->GetAll());


$t = new PacientePersistence();


$pac = new Paciente();
$pac->setAltura(100);
$pac->setDocumento("100");
$pac->setNascimento("2015-01-01");
$pac->setNome("Jose da silva");
$pac->setPeso(80);
$pac->setSexo_Id(1);
$pac->setTipoSanguineo_Id(1);

$t->Insert($pac);






