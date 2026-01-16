<?php

    class Vehicle
    {
        public $capacity = 15;

         

        public function fuelAmount()
        {
            return 10;
        }
        
        public function capacity()
        {
            return $this->capacity;
        }

        public function applyBrakes()
        {
            return 'Braked';
        }

        public function message(){
            echo "Welcome to Vehicle <br>";
        }
    }