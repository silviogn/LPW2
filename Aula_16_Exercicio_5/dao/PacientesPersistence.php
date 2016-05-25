<?php

include_once 'Persistence.php';
include_once '../model/Paciente.php';

class PacientePersistence extends Persistence {

    public function DocumentExists($document) {
        $parameters = array();
        $parameters[":documento"] = $document;
        $resultdo = $this->ExecuteQuery(
                "SELECT COUNT(Id) Total FROM pacientes WHERE Documento = :documento", $parameters);
        return $resultdo[0][0];
    }

    public function Insert(Paciente $paciente) {
        $sql = "INSERT INTO pacientes(Documento,Nome,Peso,Nascimento,Altura,TipoSanguineo_Id,Sexo_Id, Descricao) "
                . "VALUES(:Documento ,:Nome ,:Peso ,:Nascimento ,:Altura ,:TipoSanguineo_Id,:Sexo_Id, :Descricao )";
        $parameters = array();
        $parameters[":Documento"] = $paciente->getDocumento();
        $parameters[":Nome"] = $paciente->getNome();
        $parameters[":Peso"] = $paciente->getPeso();
        $parameters[":Nascimento"] = $paciente->getNascimento();
        $parameters[":Altura"] = $paciente->getAltura();
        $parameters[":TipoSanguineo_Id"] = $paciente->getTipoSanguineo_Id();
        $parameters[":Sexo_Id"] = $paciente->getSexo_Id();
        $parameters[":Descricao"] = $paciente->getDescricao();
        return $this->ExecuteCommand($sql, $parameters);
    }

}
