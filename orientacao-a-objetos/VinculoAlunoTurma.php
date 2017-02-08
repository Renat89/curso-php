<?php
//Agregação - Exercício 5 e 6

class Aluno {
  public $nome;
  public $rg;
  public $dataNascimento;
  public $turmaDo;
}

class Turma {
  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;

}

$Turma = new Turma;
$turma->periodo = "Manha";
$turma->serie = "5";
$turma->sigla = "B";
$turma->tipoDeEnsino = "Fundamental";

$aluno = new Aluno;
$aluno->nome =  "Rafael Cosentino";
$aluno->rg =  "222222222-2";
$aluno->dataNascimento = "30/10/1984";
$aluno->turma = $turma;


echo "\nDados do Aluno\n".PHP_EOL;
echo "Nome do aluno: $aluno->nome".PHP_EOL;
echo "RG do aluno: $aluno->rg".PHP_EOL;
echo "Data de Nascimento do aluno: $aluno->dataNascimento".PHP_EOL;
echo "\nTurma:".PHP_EOL;
echo "periodo {$aluno->turma->periodo}".PHP_EOL;
echo "serie {$aluno->turma->serie}".PHP_EOL;
echo "sigla {$aluno->turma->sigla}".PHP_EOL;
echo "tipoDeEnsino {$aluno->turma->tipoDeEnsino}".PHP_EOL;
