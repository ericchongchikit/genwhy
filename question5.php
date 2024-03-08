<?php
require_once "./question4.php";


    class ElectricCar extends Car{
        public $battery;

        public function setBattery($battery){
            $this->battery = $battery;
        }

        public function showBattery(){
            echo "Battery Capacity: ". $this->battery. "<br>"; 
        }
    }

    class HybridCar extends Car{
        public $battery;
        public $fuel;

        public function setHybridCar($battery, $fuel){
            $this->battery = $battery;
            $this->fuel = $fuel;
        }

        public function showHybridCar(){
            echo "Battery Capacity: ". $this->battery. "<br>"; 
            echo "Fuel Capacity: ". $this->fuel. "<br>"; 
        }
    }

    $electricCar = new ElectricCar();
    $electricCar->setCar('US','TESLA','2022');
    $electricCar->setBattery('1111');
    $electricCar->showInfo();
    $electricCar->showBattery();
    echo "<br>";
    $hybridCar = new HybridCar();
    $hybridCar->setCar('MY','Toyota','2023');
    $hybridCar-> setHybridCar('1','2');
    $hybridCar->showInfo();
    $hybridCar -> showHybridCar();

?>