<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
#Example #1 Using instanceof with classes
class MyClass{
}

class NotMyClass{
}

$a = new MyClass;

var_dump($a instanceof MyClass);

var_dump($a instanceof NotMyClass);
?>
