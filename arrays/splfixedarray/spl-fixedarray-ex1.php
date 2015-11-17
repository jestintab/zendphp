<?php
#Examples

#Example #1 SplFixedArray usage example

// Initialize the array with a fixed length
$array = new SplFixedArray(5);

$array[1] = 2;
$array[4] = "foo";
echo "<pre>";
var_dump($array[0]); // NULL
var_dump($array[1]); // int(2)

var_dump($array["4"]); // string(3) "foo"

echo "\n Array Count defined : " . $array->count() . "\n";

// Increase the size of the array to 10
$array->setSize(10);

// getting the array size
echo "\n getSize :" .$array->getSize() . "\n";

$array[9] = "asdf";

echo "\n Array Count increase : " . $array->count() . "\n";

// Shrink the array to a size of 2
$array->setSize(2);

echo "\n Array Count shrink : " . $array->count() . "\n";

// The following lines throw a RuntimeException: Index invalid or out of range
try {
    var_dump($array["non-numeric"]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}

try {
    var_dump($array[-1]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}

try {
    var_dump($array[5]);
} catch(RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}
?>
