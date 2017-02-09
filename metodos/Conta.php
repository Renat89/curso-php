<?php


class Conta {

  public $numero;
  public $saldo;
  public $limite = 100;
  public $agencia;

  public function __construct($agencia){
    $this->agencia = $agencia;
  }

  function deposita($valor){
    $this->saldo += $valor;
  }

  function saca($valor){
    if ($valor <= $this->saldo){
    $this->saldo -= $valor;
    return TRUE;
    } else {
    return FALSE;
    }
  }


  function consultaSaldoDisponivel(){
    echo "Seu saldo é de $this->saldo";
    echo "\n";
  }


  function imprimeExtrato(){
    echo "___Extrato___".PHP_EOL;
    echo "Agencia: {$this->agencia->numero}".PHP_EOL;
    echo "Conta: $this->numero".PHP_EOL;
    echo "Saldo: $this->saldo".PHP_EOL;
    echo "Limite: $this->limite".PHP_EOL;
    echo "\n";
  }
}

 ?>
