<?php 

    require 'vendor/autoload.php';

    Use App\Student;
    use App\Teacher;
    use App\Staf;
    Use App\Main;
    use App\Model\User;

    $std = new Student;

    $staf = new Staf;

    $main = new Main($staf);
    $main->hello();


    // $user = new User(); 
    // $main = new Main($user);
    // $main->hello();

    