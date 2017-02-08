<?php

class Agencia {
  public $numero;

}

$agencia1 = new Agencia;
$agencia1->numero = 1234;

$agencia2 = new Agencia;
$agencia2->numero = 5678;

echo "Numero da agencia1 é: $agencia1->numero".PHP_EOL;

echo "Numero da agencia2 é: $agencia2->numero".PHP_EOL;

?>
