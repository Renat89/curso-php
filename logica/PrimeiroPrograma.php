<?php

//$nome = "Gretchen";

/*echo "Nome: $nome\n";
echo "Nome: $nome". PHP_EOL; //PHP_EOL é similar ao \n

echo 'Nome: $nome\n';

var_dump((string)$name);

echo "Nome: $nome\n";
*/

/*$resultado = 10 % 3;

echo "Resto da divisão de 10 por 3: $resultado\n";
*/


/*$saldoDaConta = 100;

$saldo = 300;
$saldo /= 2;


echo "Saldo = $saldo\n";*/

/*
$a = 10;

$b = "10  cachorros, 4 gatos";

$resultado = $a == $b;
echo "a == b: $resultado" . PHP_EOL;

var_dump($resultado);
*/

/*
$altura = 2.0;

//altura minima para entrar é 1.40
//altura máxima para entrar é 2.00

$resultado = $altura >= 1.40 && $altura <= 2;

if ($resultado) {
  echo "Pode entrar\n";
} else {
  echo "Não pode entrar\n";
}

*/


$contador = 0; //Declaração
while ($contador < 10) { //Condição de parada
    echo "Deu onda".PHP_EOL;
    $contador++; //Incremento
}

for ($contador=0; $contador < 10; $contador++) {
    echo "Deu onda".PHP_EOL;
}
