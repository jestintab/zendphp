<?php
#Example #1 Defining and using a final calss and method.
class MyClass
{
    static $myConstant = 'value';
    const PIE = '3.14';

   public function __construct(){
       echo "I am here " . PHP_EOL;
       echo "In construct " . self::$myConstant . PHP_EOL;
       
    }
     final public function moreTesting() {
       echo "MyClass::__construct() called\n";
   }
    
}
class Mychildclass extends MyClass{
	 final function result(){
       echo "I am in child " . PHP_EOL;

       
    }
}

$objClass = new Mychildclass();
echo $objClass::$myConstant . PHP_EOL;
echo $objClass->result() . PHP_EOL;
echo $objClass->moreTesting() . PHP_EOL;
echo $objClass::PIE . PHP_EOL;

?>
