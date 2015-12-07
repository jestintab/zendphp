<?php
#Example #2 Undefined order of evaluation

$a = 1;
echo $a + $a++; // may print either 2 or 3
echo "\n\n";
$i = 1;
$array[$i] = $i++; // may set either index 1 or 2

echo "\n\n";
print_r($array); // Array ( [2] => 1 )
?>
