<?php
// Show all errors
error_reporting(E_ALL);

$great = 'fantastic';

// Won't work, outputs: This is { fantastic}
echo "This is { $great}" . "\n";

// Works, outputs: This is fantastic
echo "This is {$great}" . "\n";
echo "This is ${great}" . "\n";

// Works
echo "This square is {$square->width}00 centimeters broad." . "\n"; 


// Works, quoted keys only work using the curly brace syntax
echo "This works: {$arr['key']}" . "\n";


// Works
echo "This works: {$arr[4][3]}" . "\n";

// This is wrong for the same reason as $foo[bar] is wrong  outside a string.
// In other words, it will still work, but only because PHP first looks for a
// constant named foo; an error of level E_NOTICE (undefined constant) will be
// thrown.

$arr = array('foo' => array(1,2,3,6));
echo "LINE: " . __LINE__ . " This is wrong: {$arr[foo][3]}" . "\n"; 

// Works. When using multi-dimensional arrays, always use braces around arrays
// when inside of strings
echo "This works: {$arr['foo'][3]}" . "\n";

// Works.
echo "This works: " . $arr['foo'][3] . "\n";

echo "This works too: {$obj->values[3]->name}" . "\n";

echo "This is the value of the var named $name: {${$name}}" . "\n";

echo "This is the value of the var named by the return value of getName(): {${getName()}}" . "\n";

echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}" . "\n";

// Won't work, outputs: This is the return value of getName(): {getName()}
echo "This is the return value of getName(): {getName()}" . "\n";
?>
