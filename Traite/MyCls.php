<?php 

    require "Foo.php";
    require "Bar.php";
    require "ParentCls.php";

    class MyCls extends ParentCls {
        use Foo, Bar;

        public function hello(){
            $this->display();
        }
    }

    $obj = new MyCls();
    $obj->ok();
