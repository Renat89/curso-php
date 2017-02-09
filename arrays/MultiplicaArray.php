<?php

//Exercício 2 - Ordena array

echo "[";

for($i = 1; $i < count($argv); $i++){
  $mult = 1;
  for ($j = 1; $j <count($argv); $j++){
    if ($i <> $j){
      //echo "$argv[$j]".PHP_EOL;
      $mult *= $argv[$j];
      }
  }
  echo " $mult";
}

echo "]".PHP_EOL;
