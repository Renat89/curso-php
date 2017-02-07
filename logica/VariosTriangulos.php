<?php
//Exercício 6 - Programa que imprime 5 triângulos de *

$numeroDeTriangulos = 0;

while ($numeroDeTriangulos != 5){ // são 5 triangulos
  for ($contador1 = 1; $contador1 <= 5; $contador1++){ //são 5 linhas de estrelas por arvore
    for ($contador2 = 0; $contador2 < $contador1; $contador2++){ //imprime a quantidade de estrelas de cada linha
      echo "*";
      }
    echo "\n";
  }
  $numeroDeTriangulos++;
}
