<?php
//        interface parent1 {
//            function calc($a, $b);
//        }
//
//        interface parent2 {
//            function sub($c, $d);
//        }
//
//        class childClass implements parent1, parent2{
//            public function calc($a, $b){
//                echo $a + $b;
//            }
//
//            public function sub($c, $d) {
//                echo $c - $d;
//            }
//        }
//
//        $test = new childClass();
//        $test->calc(20, 35);
//        echo "\n";
//        $test->sub(200, 35);

//          interface HourlyRentable
//          {
//              public function getHourlyRate();
//          }
//
//          abstract class Vehicle
//          {
//              abstract public function getBaseFare();
//
//              abstract public function getPerkiloFare();
//
//              public function getTotalFare()
//              {
//                  echo $this->getBaseFare() + $this->getPerkiloFare() . "\n";
//              }
//          }
//
//          class Car extends Vehicle implements HourlyRentable
//          {
//              public function getBaseFare()
//              {
//                  return 20;
//              }
//
//              public function getPerkiloFare()
//              {
//                  return 10;
//              }
//
//              public function getHourlyRate()
//              {
//                  echo "Hourly 2 Dollar";
//              }
//          }
//
//          class Bike extends Vehicle
//          {
//              public function getBaseFare()
//              {
//                  return 10;
//              }
//
//              public function getPerkiloFare()
//              {
//                  return 5;
//              }
//          }
//
//        $car = new Car();
//        $car->getTotalFare();
//
//        echo "<br>";
//
//        $bike = new Bike();
//        $bike->getTotalFare();

