<?php
#Example #1 :: from outside the class definition
class MyClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE . "\n"; // As of PHP 5.3.0

echo MyClass::CONST_VALUE . "\n";
?>
