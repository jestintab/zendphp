<?php
session_save_path("/var/www/more/sessions");
session_start();
echo session_save_path() . PHP_EOL;
$_SESSION['auth'] = true;
 //echo  session_abort();

$jobStatus = "Looking for change";
$_SESSION['jobStatus']= $jobStatus;

echo "Getting Session  id " . session_id() . "<br/>";

    
    
?>
