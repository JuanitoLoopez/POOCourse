<?php
require_once("car.php");
class UberBlack extends Car {
     public $typeCarAccepted;
     public $seatMaterial;
 
     public function __constructor($typeCarAccepted, $seatMaterial, $license, $diver) {
         parent:: __constructor($license, $diver);
         $this->typeCarAccepted = $typeCarAccepted;
         $this->seatMaterial = $seatMaterial;
     }
}
?>