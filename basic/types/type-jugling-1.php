<?php
$foo = 0;  // $foo is integer (0)
echo $foo . "\n\n";
$foo = "0";  // $foo is string (ASCII 48)
echo $foo . "\n\n";

$foo += 2;   // $foo is now an integer (2)
echo $foo . "\n\n";

$foo = $foo + 1.3;  // $foo is now a float (3.3)
echo $foo . "\n\n";

$foo = 5 + "10 Little Piggies"; // $foo is integer (15)
echo $foo . "\n\n";

$foo = 5 + "10 Small Pigs";     // $foo is integer (15)
echo $foo . "\n\n";

$foo = 5 + "10Small Pigs";     // $foo is integer (15)
echo $foo . "\n\n";
?>
