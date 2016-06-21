<?php

if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    include_once '../business/PacientesBl.php';
    $pacienteBl = new PacientesBl();
    $result = $pacienteBl->GetPaciente($id);

    echo "Documento: " . $result[0]['Documento'] ."<br>";
    echo "Nome: " . $result[0]['Nome'] ."<br>";
    echo "Peso: " . $result[0]['Peso'] ."<br>";
    echo "Altura:" . $result[0]['Altura'] ."<br>";
    echo "Nascimento: " . $result[0]['Nascimento']."<br>";
    echo "Descricao: " . $result[0]['Descricao']."<br>";
    echo "Sexo: " . $result[0]['NomeSexo']."<br>";
    echo "Tipos Sanguineo: " . $result[0]['NomeTipoSanguineo'];
}


