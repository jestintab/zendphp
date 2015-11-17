<?php
#Example #1 Autoload example
#This example attempts to load the classes MyClass1 and MyClass2 from the files MyClass1.php and MyClass2.php respectively.
function __autoload($class_name) {
    include $class_name . '.php';
}

$obj  = new MyClass1();
$obj2 = new MyClass2(); 

?>
