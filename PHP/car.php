<?php
  require_once('account.php');

  class Car{
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function _constructor($license, $driver,$model,$brand) {
      $this->license = $license;
      $this->driver = $driver;
  
    }
    
    public function printDataCar(){
      echo "Licencia: $this->license Driver: " .$this->driver->name;
     }
  }
?>