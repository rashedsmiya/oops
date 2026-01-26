<?php 

    spl_autoload_register(function ($class_name) {
        require_once "classes/" . $class_name . ".php";
    });

    $user = new User();
    $msg = $user->getMsg(); 

    switch ($msg) { 
        case 'email':
            $objmsg = new sendEmail(); 
            break;
        case 'sms':
            $objmsg = new sendSms(); 
            break; 
        case 'fax':
            $objmsg = new sendFax();  
            break;    
    }
    $objmsg->notification();
    

    