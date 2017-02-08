<?php

class Turma {
  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;

}

$turma1 = new Turma;
$turma1->periodo = "Tarde";
$turma1->serie = "8";
$turma1->sigla = "A";
$turma1->tipoDeEnsino = "Fundamental";

$turma2 = new Turma;
$turma2->periodo = "Manha";
$turma2->serie = "5";
$turma2->sigla = "B";
$turma2->tipoDeEnsino = "Fundamental";

echo "Turma 1:".PHP_EOL;
echo "periodo $turma1->periodo".PHP_EOL;
echo "serie $turma1->serie".PHP_EOL;
echo "sigla $turma1->sigla".PHP_EOL;
echo "tipoDeEnsino $turma1->tipoDeEnsino".PHP_EOL;


echo "\nTurma 2:".PHP_EOL;
echo "periodo $turma2->periodo".PHP_EOL;
echo "serie $turma2->serie".PHP_EOL;
echo "sigla $turma2->sigla".PHP_EOL;
echo "tipoDeEnsino $turma2->tipoDeEnsino".PHP_EOL;

 ?>
