<?php

require_once 'Gerente.php';
require_once 'Secretaria.php';
require_once 'Telefonista.php';

$gerente = new Gerente;
$gerente->nome = "Rafael Cosentino";
$gerente->salario = 2000;
$gerente->usuario = "rafael.cosentino";
$gerente->senha = 12345;

$telefonista = new Telefonista;
$telefonista->nome = "Carolina Mello";
$telefonista->salario = 1000;
$telefonista->estacaoDeTrabalho = 13;

$secretaria = new Secretaria;
$secretaria->nome = "Tatiane Andrade";
$secretaria->salario = 1500;
$secretaria->ramal = 198;

echo "GERENTE".PHP_EOL;
echo "$gerente->nome".PHP_EOL;
echo "$gerente->salario".PHP_EOL;
echo "$gerente->usuario".PHP_EOL;
echo "$gerente->senha".PHP_EOL;
echo $gerente->calculaBonificacao().PHP_EOL.PHP_EOL;

echo "TELEFONISTA".PHP_EOL;
echo "$telefonista->nome".PHP_EOL;
echo "$telefonista->salario".PHP_EOL;
echo "$telefonista->estacaoDeTrabalho".PHP_EOL;
echo $telefonista->calculaBonificacao().PHP_EOL.PHP_EOL;

ECHO "SECRETARIA".PHP_EOL;
echo "$secretaria->nome".PHP_EOL;
echo "$secretaria->salario".PHP_EOL;
echo "$secretaria->ramal".PHP_EOL;
echo $secretaria->calculaBonificacao().PHP_EOL;

 ?>
