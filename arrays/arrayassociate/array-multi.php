<?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

print_r($array["foo"]);
 echo  "\n"; 
print_r($array[42]);
echo  "\n"; 
print_r($array["multi"]["dimensional"]["array"]);
 echo  "\n"; 
?>
