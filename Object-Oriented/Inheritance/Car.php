<?php

    require "Vehicle.php";

    class Car extends Vehicle{
        public function display(){
            echo "Welcome to Car";
        }

        public function fuelAmount()
        {
            return 20;
        }
    }

    
//
//    $car = new Car();
//    echo $car->applyBrakes();
//    echo "<br>";
//    $car->display();
//
//    echo "<br>";
//    echo 'Fuel Amount is: ' . $car->fuelAmount();