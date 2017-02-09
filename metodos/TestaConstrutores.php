<?php

require_once'CartaoDeCredito.php';
require_once 'Agencia.php';
require_once 'Conta.php';


$agencia = new Agencia(123);
echo ":::::Agencia:::::".PHP_EOL;
echo "Numero da agencia:$agencia->numero".PHP_EOL;
echo "\n";

$cartao = new CartaoDeCredito(1234);
$cartao->dataDeValidade = "01/01/2013";

echo ":::::Cartao de Credito:::::".PHP_EOL;
echo "Numero: $cartao->numero".PHP_EOL;
echo "Validade: $cartao->dataDeValidade".PHP_EOL;
echo "\n";


$conta = new Conta($agencia);
$conta->numero = 13;
$conta->limite = 100;

echo ":::::Conta:::::".PHP_EOL;
$conta->deposita(1000);
$conta->saca(100);
$conta->imprimeExtrato();
$conta->consultaSaldoDisponivel();
