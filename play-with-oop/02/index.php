<?php 

    require 'vender/autoload.php';

    use App\Main;

    $main = new Main;
    $main1 = new Main;
    $main2 = new Main;
    $main3 = new Main;
    $main4 = new Main;
    $main5 = new Main;
    $main6 = new Main;
    $main7 = new Main;
    $main8 = new Main;
    $main9->display();

    echo Main::$numberOfInstances;
