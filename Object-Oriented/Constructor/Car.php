<?php 
 
     require "Vehicle.php";

     class Car extends Vehicle{

        public $color;
         
        public function __construct($capacity, $fuelAmount, $color){
            parent::__construct($capacity, $fuelAmount, $color);
            $this->color = $color;
        }
    }

    $car = new Car(10, 25, 'red');
    echo $car->capacity();
    echo "<br/>";
    echo $car->fuelAmount();
    echo "<br/>";
    echo 'Color is: ' . $car->color;
    
    