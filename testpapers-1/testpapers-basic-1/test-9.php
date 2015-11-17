<?php

$a = 1;
$b = 2.5;
$c = 0xF;
echo $c. PHP_EOL;

$d = $b + $c;
echo $d . PHP_EOL;


$e = $d * $b;
$f = ($d + $e) % $a;

print ($f + $e);

?>