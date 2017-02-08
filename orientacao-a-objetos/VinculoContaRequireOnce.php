<?php
//Testando o require once

require_once 'Agencia.php';

class Conta {
  public $numero;
  public $saldo;
  public $limite = 100;
  public $local;
  }

$agencia = new Agencia;
$agencia->numero = 178;

$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 1000.0;
$conta->limite = 500;

$conta->local = $agencia;


echo "\nDados da Conta\n".PHP_EOL;
echo "Numero da Conta: $conta->numero".PHP_EOL;
echo "Saldo da Conta: $conta->saldo".PHP_EOL;
echo "Limite da Conta: $conta->limite".PHP_EOL;
echo "Agencia: {$conta->local->numero}\n".PHP_EOL;
