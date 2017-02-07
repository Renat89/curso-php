
<?php
//Exercício 3 - Programa que imprime * se é numero par e ** se é impar

for ($contador = 1; $contador <= 100; $contador++){
  if ($contador % 2 === 1){
    echo "*\n";
  } else {
    echo "**\n";
  }
}
