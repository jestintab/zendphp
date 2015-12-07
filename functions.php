<?php
function increment($val){
    return ++$val;
}
$val = 1;
echo increment($val) . PHP_EOL; //2


function increment2($val){
    return $val++;
}
$val = 1;
echo increment2($val) . PHP_EOL;//1
?>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function table(){
     $sum = 0;
     $cnt = func_num_args();
     for($i=0; $i < $cnt; $i++){
        $sum += func_get_arg($i);
     }
     
     return $sum;
}

echo table(1,2.5,4.5) . PHP_EOL; //8
?>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function table($x, $x=2, $x=99){
    return $x; 
}

echo table(3,4,5) . PHP_EOL; //5
?>
<?php


$x = function ($a, $b, $c){
    return print("$c|$b|$a") ;
};

echo $x(5,2,3);//3|2|51 last 1 is return of print function
?>
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

?>