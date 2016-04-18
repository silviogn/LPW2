<?php

class Conta {

    private $Numero;
    private $Agencia;
    private $Saldo;
    private $Limite;
    private $Especial;
    private $Transacoes;

    public function __construct($pNumero, $pAgencia, $pSaldo, $pLimite, $pEspecial) {
        $this->Numero = $pNumero;
        $this->Agencia = $pAgencia;
        $this->Saldo = $pSaldo;
        $this->Limite = $pLimite;
        $this->Especial = $pEspecial;
        $this->Transacoes = array();
    }

    public function Debitar($pValor) {
        if ($pValor > 0 && ($this->Saldo + $this->Limite) >= ($pValor)) {
            $this->Saldo-=$pValor;
            $this->Movimentar($pValor, "DEBITO", "Debito {$pValor} em " . date("d/m/Y"));
        } else {
            print "Erro saldo insuficiente ou valor a ser debitado menor ou igual a zero <br>";
        }
    }

    public function Creditar($pValor) {
        if ($pValor > 0) {
            $this->Saldo+=$pValor;
            $this->Movimentar($pValor, "CREDITO", "Credito {$pValor} em " . date("d/m/Y"));
        }
        else {
            print "O valor creditado menor ou igual a zero";
        }
    }

    public function Imprimir() {
        print "<br>";
        print "Ag: {$this->Agencia}  Conta: {$this->Numero} Saldo: {$this->Saldo} Limite: {$this->Limite} Especial: {$this->Especial} <br>";
        print "---------------------------------------- <br>";
        foreach ($this->Transacoes as $transacao) {
            print "{$transacao["Descricao"]} - {$transacao["Tipo"]} - {$transacao["Valor"]} <br>";
        }
    }

    private function Movimentar($pValor, $pTipo, $pDescricao) {
        $transacao = array("Valor" => $pValor,
            "Tipo" => $pTipo,
            "Descricao" => $pDescricao
        );
        array_push($this->Transacoes, $transacao);
    }

}
