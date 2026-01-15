<?php

    require "Vehicle.php";

    class Truck extends Vehicle {

        public function message() {
            parent::message();
            echo "This is Truck <br/>";
        }

    }

    $truck = new Truck();
    $truck->message();