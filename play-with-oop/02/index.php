<?php 

    require 'vendor/autoload.php';
    
    use App\Student;
    use App\Teacher;
    use App\Staf;
    use App\Main;
    use App\Model\User;


    // $user = new User;
    $std = new Teacher();
    $staf = new Staf();

    $main = new Main($staf);
    $main->hello();

    


    // $std = new Student;
    // $std->display();
    // echo $std->getRoll();


