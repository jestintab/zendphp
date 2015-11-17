<?php
#Example #1 array_splice() examples
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
// $input is now array("red", "green")
echo "<pre>";
print_r($input);

$input = array("red", "green", "black", "blue", "yellow", "orange");
array_splice($input, 1, -2);
// $input is now array("red", "yellow")

print_r($input);
echo "replacement\n";
$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
// $input is now array("red", "orange")

print_r($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
// $input is now array("red", "green",
//          "blue", "black", "maroon")

print_r($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 3, 0, "purple");
// $input is now array("red", "green",
//          "blue", "purple", "yellow");

print_r($input);
echo "</pre>";
?>