<?php


require_once 'Conta.php';

echo "Contador: " . Conta::$contador.PHP_EOL;

$x = new Conta();

//$x->numero = 11;
$x->saldo = 600;
echo "Numero da conta x = $x->numero".PHP_EOL;

echo "Contador: " . Conta::$contador.PHP_EOL;

$y = new Conta();
//$y->numero = 12;
$y->saldo = 130;
echo "Numero da conta y = $y->numero".PHP_EOL;

Conta::zeraContador();

echo "Contador: " . Conta::$contador.PHP_EOL;
