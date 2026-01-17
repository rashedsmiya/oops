<?php 

    require 'vendor/autoload.php'; 

    use App\Test\Bus;

    $obj = new App\Test\Vehicle();
    $obj->fuelAmount();
    echo "<br>";

    $bus = new Bus();
    $bus->test();
    echo "<br>";

    $bus->message();



    