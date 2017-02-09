<?php

//Exercício 5 - Ordena array invertido


$arrayEmOrdem = $argv;


sort($arrayEmOrdem);

for($i = 1; $i < count($arrayEmOrdem); $i++)
  {
    echo "$arrayEmOrdem[$i]".PHP_EOL;
  }
