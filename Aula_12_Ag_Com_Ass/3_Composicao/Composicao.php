<?php

/* 
 * Composição também é uma relação que demonstra uma relação todo/parte.
 * A diferença em relação à agregação é que, na composição, objeto-pai ou
 * "todo" é responsável pela criação e destruição de suas partes. 
 * 
 * Na agregação, ao destruirmos o objeto "todo", as "partes" permanencem
 * na memória por terem sido criadas fora do escopo da classe "todo". 
 * Já na composição, quando o objeto "todo" é destruído, suas "partes" 
 * também são, justamente por terem sido criadas pelo objeto "todo".
 */

include_once './Contato.php';
include_once './Forncedor.php';

$fornecedor = new Forncedor(800, "Liberdade LTDA.");
$fornecedor->AtribuirContato("Alberto Roberto", "5555-98009988", 
        "ar@galaxias.com");

$fornecedor->ExibirContato();







