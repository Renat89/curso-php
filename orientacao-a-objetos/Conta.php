<?php

class Conta {
  public $numero;
  public $saldo;
  public $dono;
  }

class Cliente {
  public $nome;

}
$conta = new Conta;
$conta -> numero = 123;
$conta ->saldo = 550;


$cliente = new Cliente;
$cliente->nome = "Joao";

$conta->dono = $cliente;




echo "Numero da conta: $conta->numero\n";
echo "Saldo: $conta->saldo\n";


echo "Nome do dono da conta: {$conta->dono->nome}".PHP_EOL;

 ?>
