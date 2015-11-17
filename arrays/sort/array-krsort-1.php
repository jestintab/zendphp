<?php
#Example #1 krsort() example

$fruits = array("guave", "d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple", "j"=>"jackfruit", "pineapple");
krsort($fruits);
print_r($fruits);
//die();
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>

