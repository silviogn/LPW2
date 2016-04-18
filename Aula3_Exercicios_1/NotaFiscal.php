<?php

class NotaFiscal {

    private $Codigo;
    private $Data;
    private $NomeCliente;
    private $PercentualDesconto;
    private $Desconto;
    private $SubTotal;
    private $Total;
    private $Itens;

    /*
     * Construtor da classe.
     */

    public function __construct($pCodigo, $pNomeCliente, $pPercentualDesconto) {
        if ($pCodigo == null || $pCodigo <= 0) {
            exit("Valor para o paramámetro Código inválido");
        }

        if ($pNomeCliente == null || empty($pNomeCliente)) {
            exit("Valor para o paramámetro Nome Cliente");
        }

        if ($pPercentualDesconto == null) {
            exit("Valor para o paramámetro Percentual Desconto");
        } else {
            if ($pPercentualDesconto < 0 || $pPercentualDesconto > 5) {
                $pPercentualDesconto = 0;
            }
        }

        $this->InicializarValoresDefault($pCodigo, $pNomeCliente, $pPercentualDesconto);
    }

    /*
     * Destrutor da classe.
     */

    public function __destruct() {
        $this->LiberarValores();
    }

    /*
     * Inicializa os valores dos atributos. Valores padrao para todos 
     * os atribtuso que nao sao passados como parametro.
     */

    private function InicializarValoresDefault($pCodigo, $pNomeCliente, $pPercentualDesconto) {
        $this->Codigo = $pCodigo;
        $this->NomeCliente = $pNomeCliente;
        $this->PercentualDesconto = $pPercentualDesconto;
        $this->Data = date("d/m/Y");
        $this->Desconto = 0;
        $this->SubTotal = 0;
        $this->Total = 0;
        $this->Itens = array();
    }

    /*
     * Calcula os totais da nota fiscal. Desconto, Subtotal e total.
     */

    private function CalcularTotais() {
        $this->SubTotal = 0;
        foreach ($this->Itens as $Item) {
            $this->SubTotal += $Item['Valor'];
        }

        $this->Desconto = ($this->SubTotal * $this->PercentualDesconto) / 100;
        $this->Total = $this->SubTotal - $this->Desconto;
    }

    /*
     * Atualiza um item da nota fiscal.
     */

    private function AtualizaItem($pCodigoProduto, $pQuantidade, $pPreco) {
        foreach ($this->Itens as & $Item) {
            if ($pCodigoProduto == $Item['CodigoProduto']) {
                $Item['Quantidade'] += $pQuantidade;
                $Item['Preco'] = $pPreco;
                $Item['Valor'] = $Item['Quantidade'] * $Item['Preco'];
                break;
            }
        }
    }

    /*
     * Verifica se um item ja existe para um determinado produto.
     */

    private function VerificaItemExistente($pCodigoProduto) {
        foreach ($this->Itens as $Item) {
            if ($pCodigoProduto == $Item['CodigoProduto']) {
                return true;
            }
        }
        return false;
    }

    /*
     * Adiciona um novo item na nota fiscal.
     */

    private function InserirItem($Sequencia, $pCodigoProduto, $pNomeProduto, $pQuantidade, $pPreco) {
        $item = array("Sequencia" => $Sequencia,
            "CodigoProduto" => $pCodigoProduto,
            "NomeProduto" => $pNomeProduto,
            "Quantidade" => $pQuantidade,
            "Preco" => $pPreco,
            "Valor" => $pPreco * $pQuantidade
        );
        array_push($this->Itens, $item);
    }

    /*
     * Libera valores dos atributos. Utilizado em conjunto com o destrutor.
     */

    private function LiberarValores() {
        $this->Codigo = null;
        $this->Data = null;
        $this->NomeCliente = null;
        $this->PercentualDesconto = null;
        $this->Desconto = null;
        $this->SubTotal = null;
        $this->Total = null;
        $this->Itens = null;
    }

    /*
     * Adiciona um novo item na nota fiscal.
     */

    public function AdicionarItem($Sequencia, $pCodigoProduto, $pNomeProduto, $pQuantidade, $pPreco) {

        if ($this->VerificaItemExistente($pCodigoProduto)) {
            $this->AtualizaItem($pCodigoProduto, $pQuantidade, $pPreco);
        } else {
            $this->InserirItem($Sequencia, $pCodigoProduto, $pNomeProduto, $pQuantidade, $pPreco);
        }
        $this->CalcularTotais();
    }

    /*
     * Reomove um item da nota fiscal.
     */

    public function RemoverItem($pSequencia) {

        if ($pSequencia == null || $pSequencia <= 0) {
            return;
        }

        foreach ($this->Itens as $key => $Item) {
            if ($pSequencia == $Item['Sequencia']) {
                unset($this->Itens[$key]);
            }
        }
        $this->CalcularTotais();
    }

    /*
     * Imprime a estrutura da nota fiscal.
     */

    public function Imprimir() {

        print "Código: {$this->Codigo} <br>";
        print "Data: {$this->Data}      Cliente: {$this->NomeCliente} <br>";
        print "-------------------------------------------------------- <br>";
        print "Produto 			Qtd	Preço 	Total <br>";
        foreach ($this->Itens as $Item) {
            print "{$Item["CodigoProduto"]} - {$Item["NomeProduto"]} {$Item["Quantidade"]}	{$Item["Preco"]} 	{$Item["Valor"]} <br>";
        }
        print "-------------------------------------------------------- <br>";
        print "Subtotal: {$this->SubTotal} <br>";
        print "Desconto: {$this->Desconto} <br>";
        print "Total: {$this->Total} <br>";
    }

}
