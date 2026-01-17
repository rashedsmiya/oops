<?php 
     
      require "user.php";
      require "student.php";

      use School\User;

      $user = new User();
      $user->get();

      $user = new User();
      $user->get();