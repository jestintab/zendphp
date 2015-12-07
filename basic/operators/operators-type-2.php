<?php
#Example #2 Using instanceof with inherited classes
class ParentClass
{
}

class MyClass extends ParentClass
{
}

$a = new MyClass;

var_dump($a instanceof MyClass); //bool(true) 
var_dump($a instanceof ParentClass); //bool(true) 
?>
