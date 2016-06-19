<?php

include_once '../business/PacientesBl.php';
include_once '../model/Paciente.php';

$id = $_POST['id'];  
$pacienteBl = new PacientesBl();


if ( $pacienteBl->Delete($id)){
    echo "Paciente excluido com sucesso";
} else {
    echo "ERRO: Paciente NÃO excluido com sucesso";
}
