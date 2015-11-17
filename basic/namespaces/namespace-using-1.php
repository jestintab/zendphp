<?php
#Example #1 Accessing global classes inside a namespace
namespace A\B\C;

class Exception extends \Exception {
	
}

$a = new Exception('hi'); // $a is an object of class A\B\C\Exception
print_r($a);

$b = new \Exception('hi'); // $b is an object of class Exception
print_r($b);

$c = new ArrayObject; // fatal error, class A\B\C\ArrayObject not found
print_r($c);

?>
