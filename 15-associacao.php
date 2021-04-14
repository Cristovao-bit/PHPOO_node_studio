<?php
/*
 * Associação
 * 
 * Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro. 
 */

class Pedidos {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereco;
}

$cliente = new Cliente(); // objeto instânciado
$cliente->nome = "Cristovão";
$cliente->endereco = "Estelita Cruz, nº 1035";

$pedido = new Pedidos();
$pedido->numero = "122";
$pedido->cliente = $cliente;

$dados = array(
    'numero_pedido' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco' => $pedido->cliente->endereco
);

var_dump($dados);