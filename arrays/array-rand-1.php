<?php
#Example #1 array_rand() example

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank", "wank");
$rand_keys = array_rand($input, 2);

print_r($rand_keys);

echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

?>