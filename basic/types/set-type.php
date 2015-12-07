<?php
$foo = "d68d5bar,3de"; // string
$bar = true;   // boolean

echo settype($foo, "integer") . "\n"; // $foo is now 5   (integer) outputs 1
echo settype($bar, "string") . "\n";  // $bar is now "1" (string) outputs 1

print_r($foo) . "\n"; //0

echo " --- $foo --- $bar " . "\n"; //--- 0 --- 1
?>
