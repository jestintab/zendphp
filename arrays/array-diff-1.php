<?php
#Example #1 array_diff() example

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red","orange");

print_r($array1);

print_r($array2);

$result = array_diff($array1, $array2);

print_r($result);
?>