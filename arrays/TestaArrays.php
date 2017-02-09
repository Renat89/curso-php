<?php

$cursos = array("C001" => "Matemágica");

$cursos[] = "Lógica de programação com Java";

array_push($cursos,"HTML, CSS, JS");

var_dump($cursos);

for ($i=0;$i < count($cursos); $i++){
  echo "Curso: $cursos[$i]".PHP_EOL;
}

echo "\n\n";


foreach ($cursos as $key => $value) {
  echo "Chave: $key, Valor: $value".PHP_EOL;
}
