<?php
class Car{
    public $make;
    public $model;
    public $year;

    public function setCar($make,$model,$year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function showInfo(){
        echo "Make: ". $this->year. "<br>"; 
        echo "Model: ".  $this->make. "<br>";
        echo "Year: ". $this->model . "<br>";

    }
}

// $car = new Car();

// $car->setCar('asdasd','Toyota','2023');
// $car->showInfo();

?>