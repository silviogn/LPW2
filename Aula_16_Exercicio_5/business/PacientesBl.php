<?php

include_once '../model/Paciente.php';
include_once '../dao/PacientesPersistence.php';

class PacientesBl {

    private $pacientePersistence;

    public function __construct() {
        $this->pacientePersistence = new PacientePersistence();
    }

    public function Criar(Paciente $paciente) {
        return $this->pacientePersistence->Insert($paciente);
    }

    public function VerifyDuplicatedDocument($document) {
        return $this->pacientePersistence->DocumentExists($document);
        
    }

}
