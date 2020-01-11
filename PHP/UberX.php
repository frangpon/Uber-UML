<?php
  require_once('car.php');
  class UberX extends Car {
    public $brand;
    public $model;
    
    public function _constructor($license, $driver, $brand, $model){
      parent:: _constructor($license, $driver);
      $this->brand = $brand;
      $this->model = $model;
    }
  } 
  
?>