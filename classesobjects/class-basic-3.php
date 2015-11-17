<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
#Example #5 Creating new objects
class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test{}

$obj1 = new Test();
echo 'Line no. ' . __LINE__ . "\n" ; print_r($obj1);

$obj2 = new $obj1;
echo 'Line no. ' . __LINE__ . "\n" ; print_r($obj2);

var_dump($obj1 !== $obj2);

echo 'Line no. ' . __LINE__ . "\n" ; $obj2->getNew();

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
?>
