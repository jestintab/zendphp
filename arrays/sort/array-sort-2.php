<?php
#Example #2 sort() example using case-insensitive natural ordering

$fruits = array(
    "Orange1", "orange2", "Orange3", "orange20"
);

sort($fruits, SORT_NATURAL | SORT_FLAG_CASE); //case insensitive
//print_r($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
//SORT_FLAG_CASE can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
?>