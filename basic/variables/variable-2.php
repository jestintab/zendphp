<?php
$foo = 'Bob';              // Assign the value 'Bob' to $foo
$bar = &$foo;              // Reference $foo via $bar.
$car = &$bar;

$bar = "My name is $bar";  // Alter $bar...

echo $bar ."\n\n";
echo $foo ."\n\n";                 // $foo, $car are altered too.
echo $car ."\n\n";                 // $foo, $car are altered too.

?>
