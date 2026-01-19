<?php 

    require 'vendor/autoload.php';

    Use App\Student;
    Use App\Main;
    use App\Model\User;


    $user = new User(); 
    $main = new Main($user);
    $main->hello();

    