<?php 

     class Constant{
         const PI = 3.14;

         public function area($r) {
            return self::PI * $r;
         }
     }

     echo Constant::PI;
     echo "<br>";

     $con = new Constant();
     echo $con->area(2);

     