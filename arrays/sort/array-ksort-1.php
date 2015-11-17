<?php
#Example #1 ksort() example

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple", "j"=>"jackfruit");
ksort($fruits);
print_r($fruits);
die();
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>