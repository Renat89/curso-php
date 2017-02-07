
<?php
//Programa que imprime PIN se é multiplo de 4

for ($contador = 1; $contador <= 100; $contador++){
  if ($contador % 4 === 0){
    echo "PIN" . PHP_EOL;
  } else {
    echo "$contador" . PHP_EOL;
  }
}
