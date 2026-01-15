<?php

    require "Bus.php";

    class GreenBus extends Bus {
        public function getFuelAmount() {
            return 50;
        }
    }

    echo "<br/>";
    echo "Welcome to Green Bus Class <br/>";
    $GreenBus = new GreenBus();
    echo $GreenBus->getFuelAmount();