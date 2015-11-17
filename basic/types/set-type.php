<?php
$foo = "d68d5bar,3de"; // string
$bar = true;   // boolean

echo settype($foo, "array") . "\n"; // $foo is now 5   (integer)
echo settype($bar, "string") . "\n";  // $bar is now "1" (string)

print_r($foo) . "\n";

echo " --- $foo --- $bar " . "\n";
?>
