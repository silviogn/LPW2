<?php

/*
 * Uma classe pode ser entidades de negócio: (pessoa, cliente, fornecedor) ou
 * uma entidade de interface (janela, botão, painel), etc.
 * 
 */

class Pessoa {

    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    /*
     * Metodo Crescer aumenta a 
     * altura em $centimetros
     */

    function Crescer($centimetros) {
        if ($centimetros > 0) {
            $this->Altura += $centimetros;
        }
    }

    function Formar($titulacao) {
        $this->Escolaridade = $titulacao;
    }

    function Envelhecer($anos) {
        if ($anos > 0) {
            $this->Idade += $anos;
        }
    }

}
