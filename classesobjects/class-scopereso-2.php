<?php
#Example #1 :: from outside the class definition
class MyClass {
    const CONST_VALUE = 'A constant value in parent ';
}

#Example #2 :: from inside the class definition

class OtherClass extends MyClass
{
    public static $my_static = 'static var in child';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
echo $classname::doubleColon(); // As of PHP 5.3.0

OtherClass::doubleColon();
?>
