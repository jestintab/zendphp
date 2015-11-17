<?php
#Example #1 rsort() example

$fruits = array("acpple", "lemon", "orange", "abpple", "banana", "apple");

echo "\n" . "SORT_NUMERIC : " . "\n";
rsort($fruits, SORT_NUMERIC);
print_r($fruits);

echo "\n" . "SORT_STRING : " . "\n";
rsort($fruits, SORT_STRING);
print_r($fruits);

echo "\n" . "SORT_NATURAL : " . "\n";
rsort($fruits, SORT_NATURAL);
print_r($fruits);

echo "\n" . "SORT_REGULAR : " . "\n";

rsort($fruits, SORT_REGULAR);
print_r($fruits);
 
exit();
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

?>