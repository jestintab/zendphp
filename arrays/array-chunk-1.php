<?php
#Example #1 array_chunk() example
$input_array = array('a', 'b', 'c', 'd', 'e');
echo "<pre>";
print_r($input_array);

print_r(array_chunk($input_array, 2)); 

print_r(array_chunk($input_array, 2, true));
echo "</pre>";
?>