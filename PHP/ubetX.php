<?php
class UberX extends Car {
    public $brand;
    public $model;

    public function __constructor($license, $driver, $brand, $model) {
        parent:: __constructor($license, $diver);
        $this->brand = $brand;
        $this->model = $model;
    }
}
?>