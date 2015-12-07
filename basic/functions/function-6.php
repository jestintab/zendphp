<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Example #2 Anonymous function variable assignment example 
$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};
$greet('World'); //World
$greet('PHP'); // PHP

$greet2 = function($name)
{
    return $name . "!! ";
};

echo $greet2('World'); // World
echo $greet2('PHP');// PHP
?> 
