<?php 

    require 'vendor/autoload.php';
    
    use App\User;
    
    // $user = new User();
    // $user->display();
 
    User::getObject()->display();
    User::getObject()->display();
    User::getObject()->display();
    User::getObject()->display();
    User::getObject()->display();
     
    echo User::$numberOfInstance;