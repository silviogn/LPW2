<?php

include_once 'Persistence.php';

class SexoPersistence extends Persistence{
    public function GetAll(){      
        return $this->ExecuteQuery("SELECT Id, Nome FROM sexo ORDER BY Nome", array());
    }
}
