<?php

require_once'Conta.php';
require_once'Agencia.php';

$conta = new Conta(178);
$conta->limite = 100;
$conta->agencia = new Agencia;
$conta->numero = 13;

//deposita
$conta->deposita(1000);
$conta->imprimeExtrato();

$resultado = $conta->saca(100);

if ($resultado){
      echo "Saque efetuado com sucesso".PHP_EOL;
    } else{
      echo "Saldo insuficiente para este saque.".PHP_EOL;
    }
$conta->imprimeExtrato();

$conta->consultaSaldoDisponivel();

?>
