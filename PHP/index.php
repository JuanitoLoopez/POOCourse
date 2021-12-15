<?php

require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("account.php");

//print("Hello World");

$uberX = new UberX("ZXS123", new Account("Fernando", "FWR542"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("AXS133", new Account("FernandA", "FFE522"), "Dodge", "Attitude");
$uberPool->printDataCar();

?>
