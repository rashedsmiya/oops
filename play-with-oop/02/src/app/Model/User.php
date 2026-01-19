<?php 

     namespace App\Model;

     class User  
     {
         public $name    = "John Doe";
         public $address = "Dhaka";


         public function display()
         {
            echo "Name is : {$this->name} <br>";
            echo "Addredd is : {$this->address} <br>";
         }
     }