<?php
    class Math {
        public $a;
        public $b;

        public function __construct($first, $second = 15){
            $this->a = $first;
            $this->b = $second;

            $this->display();
        }
        public function sum(){
            return $this->a + $this->b;
        }
        public function mul($c = 2){
            return $this->a * $this->b * $c;
        }
        public function display(){
            echo "welcome Boss <br>";
        }
    }

    $foo = new Math(10, 20);
    echo $foo->sum();
    echo "<br>";
    $obj = new Math(40);
    echo $obj->sum();
    echo "<br>";
    echo $obj->mul(3);




