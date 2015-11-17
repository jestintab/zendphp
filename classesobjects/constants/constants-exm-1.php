<?php
#Example #1 :: from outside the class definition 
class ConstantsExm1 {
    const CONST_VALUE = 'A constant value';
    var $CONST_VALUE = 444;
    
    public function getConst(){ 
       echo $this->CONST_VALUE . PHP_EOL;
       echo self::CONST_VALUE . PHP_EOL;
       
    }
} 
$classname = 'ConstantsExm1';
echo $classname::CONST_VALUE . PHP_EOL; // As of PHP 5.3.0
echo ConstantsExm1::CONST_VALUE . PHP_EOL;

$obj1 = new ConstantsExm1();
$obj1->getConst();
?> 
