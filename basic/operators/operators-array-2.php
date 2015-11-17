<?php
#Elements of arrays are equal for the comparison if they have the same key and value.

#Example #1 Comparing arrays
$a = array(0=>"apple",  3=>"orange", 1=>"banana");
$b = array(1 => "banana", "0" => "apple", 3=> "orange");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
?>
