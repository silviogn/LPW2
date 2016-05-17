<?php

class Forncedor {

    private $codigo;
    private $nome;

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}
