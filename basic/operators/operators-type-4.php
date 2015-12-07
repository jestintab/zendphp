<?php
#Example #4 Using instanceof for class

interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;

var_dump($a instanceof MyClass); //bool(true)
var_dump($a instanceof MyInterface); //bool(true)
?>
