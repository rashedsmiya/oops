<?php  

    namespace App\Model;
 

    class User 
    {
        public $name = "John Doe";
        public $address = "Dhaka";

        public function display(): void
        {
            echo "Name is: {$this->name} <br/>";
            echo "Address is: {$this->address} <br/>";
        }
    }