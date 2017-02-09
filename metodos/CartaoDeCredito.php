
<?php
class CartaoDeCredito {
  public $numero;
  public $dataDeValidade;
  
  public function __construct($numero){
    $this->numero = $numero;
  }
}
