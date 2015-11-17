<?php
# PHP arrays can contain integer and string keys at the same time as PHP does not distinguish between indexed and associative arrays.
# Example #3 Mixed integer and string keys
echo "<pre>";
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
echo "</pre>\n\n";
print_r($array);
?>
