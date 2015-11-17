<?php
//no key
function modifyArray (&$array) 
{
    foreach ($array as &$value)
    {
         $value = $value + 2; 
    } 
    $value = $value + 3; 
 } 
$array = array (1, 2, 3); 
modifyArray($array); 
print_r($array);

//Associates
function modifyArrayAssoc (&$array) 
{
    foreach ($array as &$rows){
         $rows['name'] = 'Mr. ' . $rows['name'] . ' ' . 2;
         $rows['age'] = $rows['age'] + 2;
    }  
 } 
 
$arrayAsso = array (array('name' => 'name 1', 'age' => 1), array('name' => 'name 2', 'age' => 2), array('name' => 'name 3', 'age' => 3)); 

modifyArrayAssoc($arrayAsso); 
print_r($arrayAsso);
?>
