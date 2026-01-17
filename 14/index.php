<?php 

    require 'src/Test/Vehicle.php';
    require 'src/Test/Bus.php';

    use src\Test\Bus;

    $obj = new src\Test\Vehicle();
    $obj->fuelAmount();

    $bus = new Bus();
    $bus->test();

    


