<?php
$foo = 0;  // $foo is integer (0)
echo $foo . "\n\n"; //0
$foo = "0";  // $foo is string (ASCII 48)
echo $foo . "\n\n"; //0

$foo += 2;   // $foo is now an integer (2)
echo $foo . "\n\n"; //2

$foo = $foo + 1.3;  // $foo is now a float (3.3)
echo gettype($foo). $foo . "\n\n"; //double 3.3

$foo = 5 + "10 Little Piggies"; // $foo is integer (15)
echo $foo . "\n\n"; //15

$foo = 5 + "10 Small Pigs";     // $foo is integer (15)
echo $foo . "\n\n"; //15

$foo = 5 + "10Small Pigs";     // $foo is integer (15)
echo $foo . "\n\n"; //15
?>
