<?php
# Example #3 Using instanceof to check if object is not an instanceof a class
class MyClass
{
}

$a = new MyClass;
var_dump(!($a instanceof stdClass)); //bool(true)
?>
