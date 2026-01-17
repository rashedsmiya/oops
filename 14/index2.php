<?php 

    require 'vendor/autoload.php'; 

    use App\Test\Bus;

    $obj = new App\Test\Vehicle();
    $obj->fuelAmount();

    $bus = new Bus();
    $bus->test();



    