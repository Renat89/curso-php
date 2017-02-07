
<?php
//Programa que imprime os 15 primeiros numeros de Fibonacci

$a = 0;
$b = 1;

echo "$a ";

for ($contador = 0; $contador < 14; $contador++){
  $aux = $b;
  $b += $a;
  $a = $aux;
  echo "$a ";
}
