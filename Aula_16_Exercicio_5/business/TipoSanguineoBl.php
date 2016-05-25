<?php

include_once '../dao/TipoSanguineaoPersistence.php';

class TipoSanguineoBl {

    private $TipoSanguineoPersistence;

    public function __construct() {
        $this->TipoSanguineoPersistence = new TipoSanguineaoPersistence();
    }

    public function GetAll() {
        return $this->TipoSanguineoPersistence->GetAll();
    }

}
