<?php
#Example #1 :: from outside the class definition 
class ConstantsExm3 {
    const CONST_VALUE = 'A constant value';
    var $CONST_VALUE = 444;
    
    public function getConst(){ 
       echo $this->CONST_VALUE . PHP_EOL;
       echo self::CONST_VALUE . PHP_EOL; 
    }
} 
?> 
