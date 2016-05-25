<?php

class Paciente {

    private $Id;
    private $Documento;
    private $Nome;
    private $Peso;
    private $Nascimento;
    private $Altura;
    private $TipoSanguineo_Id;
    private $Sexo_Id;
    private $Descricao;
    
    public function getDescricao() {
        return $this->Descricao;
    }

    public function setDescricao($Descricao) {
        $this->Descricao = $Descricao;
    }

    
    public function getId() {
        return $this->Id;
    }

    public function getDocumento() {
        return $this->Documento;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getPeso() {
        return $this->Peso;
    }

    public function getNascimento() {
        return $this->Nascimento;
    }

    public function getAltura() {
        return $this->Altura;
    }

    public function getTipoSanguineo_Id() {
        return $this->TipoSanguineo_Id;
    }

    public function getSexo_Id() {
        return $this->Sexo_Id;
    }

    public function setId($Id) {
        $this->Id = $Id;
    }

    public function setDocumento($Documento) {
        $this->Documento = $Documento;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setPeso($Peso) {
        $this->Peso = $Peso;
    }

    public function setNascimento($Nascimento) {
        $this->Nascimento = $Nascimento;
    }

    public function setAltura($Altura) {
        $this->Altura = $Altura;
    }

    public function setTipoSanguineo_Id($TipoSanguineo_Id) {
        $this->TipoSanguineo_Id = $TipoSanguineo_Id;
    }

    public function setSexo_Id($Sexo_Id) {
        $this->Sexo_Id = $Sexo_Id;
    }

}
