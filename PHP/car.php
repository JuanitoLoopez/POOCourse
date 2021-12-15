<?php

require_once 'account.php';

class Car {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __constructor($license, 
            $driver) {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo "license: $license 
            Driver: $(this.name)";
    }

}