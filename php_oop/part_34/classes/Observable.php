<?php 

    class Observable{
        private $observers = array();

        public function register($object){
            if($object instanceof observer){
                $this->observers[] = $object;
            } else {
                echo "Object should be implements oberver interface.....<br>";
            }
        }  

        public function stateChange(){
            foreach($this->observers as $overver){
                $overver->message();       
            }
        }
    }

    