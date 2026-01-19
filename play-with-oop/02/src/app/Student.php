<?php 
    
     namespace App; 

     use App\Model\User;

     class Student extends User {

        public $roll = 103;

        public function getRoll(): int
        {
            return (int) $this->roll;
        }
     }

     