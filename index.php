<?php
//        interface parent1 {
//            function calc($a, $b);
//        }
//
//        interface parent2 {
//            function sub($c, $d);
//        }
//
//        class childClass implements parent1, parent2{
//            public function calc($a, $b){
//                echo $a + $b;
//            }
//
//            public function sub($c, $d) {
//                echo $c - $d;
//            }
//        }
//
//        $test = new childClass();
//        $test->calc(20, 35);
//        echo "\n";
//        $test->sub(200, 35);
          interface MyInterfaceName{

              public function method1();
              public function method2();
          }

          class MyClassName implements MyInterfaceName{

              public function method1(){
                  echo "Method1 Called" . "\n";
              }

              public function method2(){
                  echo "Method2 Called" . "\n";
              }
          }

          $obj = new MyClassName();
          $obj->method1();
          $obj->method2();
