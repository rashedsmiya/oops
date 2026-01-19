<?php 
    
    namespace App;

    use App\Model\User;

    class Student extends User
    {
      public $roll = 123;
      
      public function getRoll(): int 
      {
        return $this->roll;
      }
    }