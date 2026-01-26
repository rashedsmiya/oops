<?php 

    abstract class Database {
        public function connect(); 
        public function query(); 
        public function insertId(); 


        public function setHost($host){
            // Set Database Here....
        }

        public function setUser($user){
            // Set Databa se User Here....
        }

        public function setPass($pass){
            // Set Database Password Here....
        }

        public function setDB($db){
            // Set Database Name Here....
        }
    }
