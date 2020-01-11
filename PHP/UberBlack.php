<?php
  require_once('car.php');
  class UberBlack extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;
    
    public function _constructor($license, $driver, $typeCarAccepted, $seatsMaterial){
      parent:: _constructor($license, $driver);
      $this->typeCarAccepted = $typeCarAccepted;
      $this->seatsMaterial = $seatsMaterial;
    }
    
  }
?>