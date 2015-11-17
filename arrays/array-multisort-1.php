<?php
#Example #1 Sorting multiple arrays

$ar1 = array(10, 100,  100, 0,1);
$ar2 = array(1, 3, 2, 4, 99);

$arr = array($ar1, $ar2);
echo "<pre>";
print_r($arr);
echo "</pre>";

array_multisort($ar1,  $ar2);

echo "<pre>";
print_r($ar1);
echo "</pre>";
echo "<pre>";
print_r(rsort($ar2));
echo "</pre>";
?>