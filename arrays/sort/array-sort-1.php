<?php
#Example #1 sort() example

$fruits = array("acpple", "lemon", "orange", "abpple", "banana", "apple");

echo "\n" . "SORT_NUMERIC : " . "\n";
sort($fruits, SORT_NUMERIC);
print_r($fruits);

echo "\n" . "SORT_STRING : " . "\n";
sort($fruits, SORT_STRING);
print_r($fruits);

echo "\n" . "SORT_NATURAL : " . "\n";
sort($fruits, SORT_NATURAL);
print_r($fruits);

echo "\n" . "SORT_REGULAR : " . "\n";

sort($fruits, SORT_REGULAR);
print_r($fruits);
 
exit();
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

?>