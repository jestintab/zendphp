<?php
include 'constants-exm-3.php';
//Three special keywords self, parent and static are used to access properties or methods from inside the class definition. 
//Example #2 :: from inside the class definition

class ConstantsExm2 extends ConstantsExm3
{
    public static $my_static = 'static var';
    
    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
    
}
$classname = 'ConstantsExm2';
$classname::doubleColon(); // As of PHP 5.3.0

ConstantsExm2::doubleColon();
?> 
