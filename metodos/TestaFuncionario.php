<?php

require_once 'Funcionario.php';

$funcionario = new Funcionario;

$funcionario->nome = "Rafael Cosentino";
$funcionario->salario = 1000;

$funcionario->consultaDados();

$funcionario->aumentaSalario(100);

$funcionario->consultaDados();

?>
