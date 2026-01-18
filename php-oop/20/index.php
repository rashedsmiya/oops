<?php 
     
       require "user.php";

       use App\User;

       $user = new User;
       $user->get();