
<?php
class CartaoDeCredito {
  public $numero;
  public $dataDeValidade;

}
$cartao1 = new CartaoDeCredito;

$cartao1->numero = 111111;
$cartao1->dataDeValidade = "01/01/2013";

$cartao2 = new CartaoDeCredito;

$cartao2->numero = 222222;
$cartao2->dataDeValidade = "01/01/2014";

echo "Numero do cartao1: $cartao1->numero".PHP_EOL;
echo "Data de Validade do cartao1: $cartao1->dataDeValidade".PHP_EOL;

echo "Numero do cartao2: $cartao2->numero".PHP_EOL;
echo "Data de Validade do cartao2: $cartao2->dataDeValidade".PHP_EOL;
