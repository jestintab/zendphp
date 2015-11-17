<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

$pidIntGet = filter_input(INPUT_GET, 'pid');

try { 
   $pidInt = new SplInt(99);
   echo $pidInt . PHP_EOL . "<br/>";  
}catch(UnexpectedValueException $uve){
    $uve->getMessage();
}


 