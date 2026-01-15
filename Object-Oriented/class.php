<?php

      class Student {
          public $id = 10;
          public $name = "John Doe";
      }

    $student = new Student();
    echo $student->name;
    $student->name = "Johnas";
    echo "<br>";
    echo $student->name;
