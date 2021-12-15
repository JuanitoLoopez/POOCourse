<?php

require_once 'account.php';
require_once 'car.php';

print("Hello World");

$car1 = new Car("AXR235", 
    new Account("Marcelino", "PID253"));
$car1->printDataCar();

?>
