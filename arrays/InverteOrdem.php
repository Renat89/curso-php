<?php

//Exercício 5 - Inverte Ordem do array

for ($i = 1; $i < count($argv); $i++){
  $arrayInvertido[$i-1] = $argv[$i];

}

rsort($arrayInvertido);


echo "Array Invertido: [";
for ($i=0; $i < count($arrayInvertido) ; $i++) {
  echo "$arrayInvertido[$i] ";
}
echo "] \n";
