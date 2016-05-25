<?php

include_once 'Persistence.php';

class TipoSanguineaoPersistence extends Persistence {
    public function GetAll(){
        return $this->ExecuteQuery("SELECT Id, Nome FROM tiposanguineo ORDER BY Nome", array());
    }
}
