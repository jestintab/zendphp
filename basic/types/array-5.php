<?php
#To change a certain value, assign a new value to that element using its key. To remove a key/value pair, call the unset() function on it.

$arr = array(4 => 4, 5 => 1, 6 =>56, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"

print_r($arr);
                
unset($arr[12]); // This removes the element from the array
print_r($arr);

$arr[] = 13;    // This is the same as $arr[13] = 13;
echo "Line 18 ";
print_r($arr);
                
unset($arr[14]); // This removes the element from the array
print_r($arr);

echo "Line 24 ";
$arr[] = 15;    // This is the same as $arr[13] = 15;
print_r($arr);


unset($arr);    // This deletes the whole array

print_r($arr);


?>
