<?php

class Car {
    public $brand;
    public $year;
    
    public function getInfo() {
        return "Mobil merk " . $this->brand . " tahun produksi " . $this->year;
    }
}

$car1 = new Car();
$car1->brand = "Toyota";
$car1->year = 2020;

echo $car1->getInfo();