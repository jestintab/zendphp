	<?php
#Example #1 Associativity

$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
echo 'Line : ' . __LINE__ . ', ' . $a . "\n\n"; //Line : 5,4
// ternary operator associativity differs from C/C++
$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2
echo 'Line : ' . __LINE__ . ', ' . $a . "\n\n";
$a = 1;
echo 'Line : ' . __LINE__ . ', ' . $a . "\n\n";

$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo 'Line : ' . __LINE__ . ', ' . $a . "\n\n";
?>
