<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Example #2 Anonymous function variable assignment example 
$percent = 30;

$year = date("Y");

$greet = function($amt, $date=9) use ($percent, $year)
{
    $prc = ($amt*$percent)/100;
    
    $str =  "$percent % of Rs. ". $amt . " is Rs. : " . $prc ;
    return $str;
}; 

echo $greet(100) . PHP_EOL;//30 % of Rs. 100 is Rs. : 30 
echo $greet(300) . PHP_EOL;// 30 % of Rs. 300 is Rs. : 90

