<?php

//Exercício 3 -Media Array


$soma = 0;
for ($i=1; $i < count($argv) ; $i++) {
  $soma += $argv[$i];
}

$n = count($argv) - 1; // é menos 1 porque conta o nome do arquivo

$arrayMedia = $soma/$n;

echo "Media dos Array = $arrayMedia".PHP_EOL;
