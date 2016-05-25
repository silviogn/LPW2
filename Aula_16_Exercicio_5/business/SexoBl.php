<?php

include_once '../dao/SexoPersistence.php';

class SexoBl {

    private $SexoPersistence;

    public function __construct() {
        $this->SexoPersistence = new SexoPersistence();
    }

    public function GetAll() {
        return $this->SexoPersistence->GetAll();        
    }

}
