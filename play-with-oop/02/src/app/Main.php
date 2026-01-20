<?php 

     namespace App;

     class Main 
     { 
        public static $numberOfInstances = 0;

        public function __construct()
        {
            self::$numberOfInstances++;
        }
        public function display(){
            echo "Welcome to Main";
        }
     }