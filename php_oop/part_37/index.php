<?php 

    
   $db = new mysqli ("localhost","root","","mysql");

    if(mysqli_connect_error()){
        echo "Connection Failed!";
        exit();
    }else{
        echo "Connection Successful!";
    }

