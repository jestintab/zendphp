<?php
#Example #1 Get column of first names from recordset
// Array representing a possible record set returned from a database

$arr1 = array('id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe');
$arr2 = array( 'id' => 3245, 'first_name' => 'Sally', 'last_name' => 'Smith');// , 'address' => 'Ambe Bhakti' // PHP Warning:  array_combine(): Both parameters should have an equal number of elements in /var/www/newphpcert/array/array-combine-1.php on line 9

$arr3 = array( 'id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones'   );

$arr4 = array_combine($arr1, $arr3);

echo "<pre>";

print_r($arr4); 
?>