<?php
$a = 1; /* global scope */ 

function test()
{ 
	$a = 99;
    echo "In test() " . $a ."\n\n"; /* reference to local scope variable */ 
} 

echo $a ."\n\n";

test();
?>
