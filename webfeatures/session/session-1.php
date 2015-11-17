<?php
    if (session_status()){
        session_start();
        echo "Session new with id " . session_id() . "<br/>";
    }
    else{
         echo "Session exist with id ". session_id() . "<br/>";
    }
    $_SESSION['auth'] = true;
    //echo  session_abort();
    
    $jobStatus = "Looking for change";
    $_SESSION['jobStatus']= $jobStatus;
    
    echo "Getting Session  id " . session_id() . "<br/>";
    
    var_dump(session_status()) . "<br/>";
?>