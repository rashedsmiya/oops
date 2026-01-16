<?php 

    class Vehicle {
        public $capacity = 15;

        public function getCapcity(){
            return $this->capacity . 'kg';
        }

    }
    class Bus extends Vehicle {
        /**
         * Update the capacity of the vehicle
         * @param int $capacity capacity of the vehicle in kg
         */
       public function updateCapacity() {
           $this->capacity = 25;
       }  
}

$bus = new Bus();
echo $bus->getCapcity();
echo "<br/>";

$bus->updateCapacity();
echo $bus->capacity;
echo "<br/>";
