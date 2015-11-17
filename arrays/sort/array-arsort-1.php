<?php
#Example #1 arsort() example -- maintain indexex
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
print_r($fruits);

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
rsort($fruits);
print_r($fruits);
?>