<?php 

    namespace App;

use Student;

    class School 
    {
        private static $student == NULL;
        private static $teacher == NULL;
        private function __construct()
        {
            
        }

        public static function teacher (){
            if(self::$teacher == NULL) {
                self::$teacher = new Teacher;
             }


             return self::$teacher;
        } 

        public static function student()
        {
            return new Student;
        }
    }