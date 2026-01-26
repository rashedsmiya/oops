<?php 

    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });

    $obj = new Observable();

    $sk = new Skype();

    $gt = new Gtalk();

    $s = new stdClass();

    $obj->register(object: $sk);
    $obj->register(object: $gt);
    $obj->register($s);
    $obj->stateChange();

