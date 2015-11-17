<?php
    if (session_status()){
        session_start();
        echo "Session new with id " . session_id() . PHP_EOL;
    }
    else{
         echo "Session exist with id ". session_id() . PHP_EOL;
    }
    session_destroy();
    
    var_dump(session_status()) . PHP_EOL;
?>