<?php
class Cliente {

  public $nome;
  public $codigo;
}


$cliente1 = new Cliente;
$cliente1->nome = "Rafael Consentino";
$cliente1->codigo = 123;

echo "Nome do cliente1: $cliente1->nome".PHP_EOL;
echo "Código do cliente1: $cliente1->codigo".PHP_EOL;

?>
