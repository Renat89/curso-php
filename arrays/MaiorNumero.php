<?php

//Exercício 4 - maior valor

$max = $argv[1];

for ($i=2; $i < count($argv) ; $i++) {
  if ($max < $argv[$i]){
    $max = $argv[$i];
  }
}

echo "Máximo valor = $max".PHP_EOL;
