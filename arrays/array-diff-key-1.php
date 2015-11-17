<?php
#Example #1 array_diff_key() example
#The two keys from the key => value pairs are considered equal only if (string) $key1 === (string) $key2 . In other words a strict type check is executed so the string representation must be the same.

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red", "yellow");
print_r($array1);

$array2 = array("a" => "green", "yellow", "red", "black");

print_r($array2);

$array3 = array("a" => "green", "black", "yellow", "red");

print_r($array3);
echo "<pre>";

$result = array_diff_key($array1, $array2, $array3);

print_r($result);

?>