<?php
#Example #1 Defining and using a static variable
class MyClass
{
    static $myConstant = 'value';
    const PIE = '3.14';

   public function __construct(){
       echo "I am here " . PHP_EOL;
       echo "In construct " . self::$myConstant . PHP_EOL;
       
    }
    
}

echo  MyClass::$myConstant . PHP_EOL;
echo  MyClass::PIE . PHP_EOL;

$objClass = new MyClass();
echo $objClass::$myConstant . PHP_EOL;
echo "using arrow";

?>
