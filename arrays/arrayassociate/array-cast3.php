<?php
#Example #3 Mixed integer and string keys
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
print_r($array);
?>
