<?php 

     namespace App;

     class User 
     {

     public static $numberOfInstance = 0;
     private static $instance = null;

     public function __construct(){
        self::$numberOfInstance += 1;
        echo "Call The Constructor <br>";
     }

        public function display(){
            echo "This is User Class,<br>";
        }    

        public static function getObject(){

         
            if(self::$instance == null){
                self::$instance = new self;
            }
            return self::$instance;
        }
     }