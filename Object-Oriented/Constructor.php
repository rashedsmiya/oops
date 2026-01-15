<?php
    class Math {
        public $a;
        public $b;

        public function __construct($first, $second){
            $this->a = $first;
            $this->b = $second;
        }
        public function sum(){
            return $this->a + $this->b;
        }

        public function mul(){
            return $this->a * $this->b;
        }
    }

    $foo = new Math(10, 20);
    echo $foo->sum();
    echo "<br>";
    $obj = new Math(40, 2);
    echo $obj->sum();
    echo "<br>";
    echo $obj-> Mul();




