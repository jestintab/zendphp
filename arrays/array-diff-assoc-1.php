<?php
#Example #1 array_diff_assoc() example
#In this example you see the "a" => "green" pair is present in both arrays and thus it is not in the output from the function. Unlike this, the pair 0 => "red" is in the output because in the second argument "red" has key which is 1.

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red", "yellow");
//print_r($array1);

$array2 = array("a" => "green", "yellow", "red", "black");

//print_r($array2);

$array3 = array("a" => "green", "black", "yellow", "red");

//print_r($array3);


$result = array_diff_assoc($array1, $array2, $array3);

print_r($result);

?>