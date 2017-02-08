<?php
//Agregação - Exercício 1 e 2

class CartaoDeCredito {
  public $numero;
  public $dataDeValidade;
  public $dono;
}

class Cliente {

  public $nome;
  public $codigo;
}

$cartao = new CartaoDeCredito;
$cartao->numero = 111111;
$cartao->dataDeValidade = "01/01/2013";


$cliente = new Cliente;
$cliente->nome = "Rafael Consentino";
$cliente->codigo = 123;

$cartao->dono=$cliente;



echo "\nDados do Cliente do Cartão\n".PHP_EOL;
echo "Nome do cliente: {$cartao->dono->nome}".PHP_EOL;
echo "Código do cliente: {$cartao->dono->codigo}".PHP_EOL;
echo "Numero do cartao do cliente: $cartao->numero".PHP_EOL;
echo "Data de Validade do cartao: $cartao->dataDeValidade\n".PHP_EOL;
