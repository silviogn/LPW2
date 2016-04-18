<?php

include_once './Pessoa.php';
include_once './PessoaFisica.php';
include_once './PessoaJuridica.php';


$pessoa = new Pessoa("Alberto Roberto", "Rivadavia 8999", "Santana do Livramento");
$pessoa->MostrarInformacoes();

print "------------------------------------------- <br>";

$pessoaJuridica = new PessoaJuridica("8555.888.7444/100", 200,"Comercial Vendo Tudo" , "Visconde de Alberto 90", "Quarai");
$pessoaJuridica->MostrarInformacoes();

print "------------------------------------------- <br>";


$pessoaFisica = new PessoaFisica("008.455.700-5", 2, "O+", "Roberto Santana", "Norberto Ruben 899", "Rivera");
$pessoaFisica->MostrarInformacoes();

        
