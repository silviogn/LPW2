<?php

include_once '../business/PacientesBl.php';
include_once '../model/Paciente.php';

$id = $_POST['id'];
$documento = $_POST['documento'];
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$nascimento = $_POST['nascimento'];
$tiposanguineo = $_POST['tiposanguineo'];
$sexo = $_POST['sexo'];
$descricao = $_POST['descricao'];
$altura = $_POST['altura'];




$paciente = new Paciente();
$paciente->setId($id);
$paciente->setDocumento($documento);
$paciente->setNome($nome);
$paciente->setPeso($peso);
$paciente->setNascimento($nascimento);
$paciente->setTipoSanguineo_Id($tiposanguineo);
$paciente->setSexo_Id($sexo);
$paciente->setDescricao($descricao);
$paciente->setAltura($altura);
$pacienteBl = new PacientesBl();


if ($pacienteBl->VerifyDuplicatedDocument($paciente->getDocumento()) == 0){
    $pacienteBl->Alterar($paciente) == 1? 
            print "Paciente Alterado com Sucesso": 
            print "Erro ao Registrar o Paciente";
    
} else {
    print " Já existe um paciente com o Documento informado";
}