<?php
#Example #1 array_walk() example

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple", "g" => "Pine apple");

function test_print_new($key2, $item){
	
	print "I m here $item : $key2 \n <br/>";
}


function test_alter(&$item1, $key, $prefix){
    $item1 = "$prefix: $item1 len:" . strlen($item1);
}

function test_print($item2, $key){
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n<br/><br/>";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n<br/><br/>";

array_walk($fruits, 'test_print_new');


?>