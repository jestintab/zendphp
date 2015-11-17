<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//echo "<pre>";
//Example #1 clearstatcache() example
$file = 'output_log.txt';
//touch($file);

function get_owner($file)
{
    $stat = stat($file);
    //print_r($stat) . PHP_EOL;
    
    $user = posix_getpwuid($stat['uid']);
    
    //print_r($user) . PHP_EOL;
    
    return $user['name'];
}

$format = "UID @ %s: %s\n";

printf($format, date('r'), get_owner($file)) . PHP_EOL;

shell_exec("sudo chown daka $file");

printf($format, date('r'), get_owner($file)). PHP_EOL;

clearstatcache();

printf($format, date('r'), get_owner($file)). PHP_EOL;
?>
