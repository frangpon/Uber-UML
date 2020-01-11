<?php 
require_once('car.php');
require_once('UberX.php'); 
require_once('UberPool.php'); 
require_once('account.php'); 

$uberX = new UberX("XME750", new Account("Andres Herrera" , "AND456"), "Chevrolet", "Spark");
$uberX->printDataCar();

$UberPool = new UberPool("TYU231", new Account("Andrea Cedron" , "ANDA456"), "Tesla", "X");
$uberPool->printDataCar();

?>
