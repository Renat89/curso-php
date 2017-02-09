<?php

class Conta {

  public $numero; //Atributo do objeto
  public $saldo;// Atributo do oobjeto
  public static $contador = 0; // Atributo da Classe

  public function __construct(){
    self::$contador++;
    $this->numero = self::$contador;
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

public static function zeraContador(){
  echo "Foram criadas ".self::$contador." conta(s) esta semana".PHP_EOL;//Envia email
  self::$contador = 0;
}

}
