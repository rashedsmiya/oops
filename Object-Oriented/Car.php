<?php

    require "Vehicle.php";

    class Car extends Vehicle{

    }

    $car = new Car();
    echo $car->fuelA-mount();