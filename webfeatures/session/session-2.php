<?php
    if (session_status()){
        session_start();
        echo "Session new with id " . session_id() . "<br/>";
    }
    else{
         echo "Session exist with id ". session_id() . "<br/>";
    }
    //session_destroy();
    if ($_SESSION['auth'] == true){
        echo "Login valid"  . "<br/>";
    }
    else{
       echo "Login expired "  . "<br/>";
    }
    
    echo "Getting Session  id " . session_id() . "<br/>";
    $sJobStatus = $_SESSION["jobStatus"];
    
    echo "My current Job status: {$sJobStatus} " . "<br/>";
      
    var_dump(session_status()) . "<br/>";
?>