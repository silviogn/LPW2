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
    
    public function Alterar(Paciente $paciente) {
        return $this->pacientePersistence->Alterar($paciente);
    }

    public function VerifyDuplicatedDocument($document) {
        return $this->pacientePersistence->DocumentExists($document);
        
    }
    
    public function GetListaPacientes($filtro, $opcion) {
        return $this->pacientePersistence->GetListaPacientes($filtro, $opcion);
            
    }
    
    public function GetPaciente($id) {
        return $this->pacientePersistence->GetPaciente($id);
    }
    
    public function Delete($id) {
        return $this->pacientePersistence->Delete($id);
    }
    
}
