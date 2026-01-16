<?php

     class PrivateClass{
        public $result = 10;

        public function getResult(){            
            return $this->result;
        }
     }   
    
     $obj = new PrivateClass();
     echo $obj->getResult();