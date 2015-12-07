<?php
#Example #5 Using instanceof with other variables
interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;
$b = new MyClass;
$e = new MyClass;
$c = 'MyClass';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b is an object of class MyClass bool(true) 
var_dump($a instanceof $c); // $c is a string 'MyClass' bool(true) 
var_dump($a instanceof $d); // $d is a string 'NotMyClass' bool(false) 
?>
