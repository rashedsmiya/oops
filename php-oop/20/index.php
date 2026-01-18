<?php 
     
       require "user.php";
       require "student.php";

       use App\User;

       $user = new User;
       $user->get();

       $user2 = new School\User;
       $user2->get();