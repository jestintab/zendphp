<?php
#Example #1 :: from outside the class definition 
class StaticExm1 {
    public static $static_value = 'A static value';
   
    public function getStatic(){ 
       echo self::$static_value . PHP_EOL; 
    }
} 
$classname = 'StaticExm1';
echo 'Using class' . $classname::$static_value . PHP_EOL; // As of PHP 5.3.0
echo StaticExm1::$static_value . PHP_EOL; 

$obj1 = new StaticExm1();
$obj1->getStatic(); 
?> 
