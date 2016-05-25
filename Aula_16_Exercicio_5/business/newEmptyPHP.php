<?php

include_once '../business/PacientesBl.php';

$p = new PacientesBl();

if ($p->VerifyDuplicatedDocument("100") == 0) {
    $pac = new Paciente();
    $pac->setAltura(100);
    $pac->setDocumento("100");
    $pac->setNascimento("2015-01-01");
    $pac->setNome("Jose da silva");
    $pac->setPeso(80);
    $pac->setSexo_Id(1);
    $pac->setTipoSanguineo_Id(1);
    $pac->setDescricao("O PACIENTE MORREU ONTEM");
    $p->Criar($pac);    
} else {
    print "paciente ja existe";
    
}

