<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

print_r($fruits);

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$key --- : $prefix: $item1";
}

array_walk($fruits, 'test_alter', 'fruits');

print_r($fruits);

?>