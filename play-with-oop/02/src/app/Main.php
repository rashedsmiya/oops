<?php 

     namespace App;

     class Main 
     {
        public static $numberOfInstance = 0;
        public function __construct()
        {
            self::$numberOfInstance += 1;
        }
        public function display()
        {
            echo "Welcome to Main Class.<br>";
        }
     }