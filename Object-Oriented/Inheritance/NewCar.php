<?php

    require "Car.php";

    class NewCar extends Car{

    }

    $newCar = new NewCar();
    echo $newCar->applyBrakes();