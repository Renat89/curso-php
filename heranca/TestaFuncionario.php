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

echo "____GERENTE____".PHP_EOL;
echo "Nome: $gerente->nome".PHP_EOL;
echo "Salario: R$ $gerente->salario".PHP_EOL;
echo "Usuario: $gerente->usuario".PHP_EOL;
echo "Senha: $gerente->senha".PHP_EOL;
echo "Bonificação: ".$gerente->calculaBonificacao().PHP_EOL.PHP_EOL;

echo "____TELEFONISTA____".PHP_EOL;
echo "Nome: $telefonista->nome".PHP_EOL;
echo "Salario: R$ $telefonista->salario".PHP_EOL;
echo "Estação de Trabalho: $telefonista->estacaoDeTrabalho".PHP_EOL;
echo "Bonificação: ".$telefonista->calculaBonificacao().PHP_EOL.PHP_EOL;

ECHO "____SECRETARIA____".PHP_EOL;
echo "$secretaria->nome".PHP_EOL;
echo "Salario: R$ $secretaria->salario".PHP_EOL;
echo "Ramal: $secretaria->ramal".PHP_EOL;
echo "Bonificação: ".$secretaria->calculaBonificacao().PHP_EOL;

 ?>
