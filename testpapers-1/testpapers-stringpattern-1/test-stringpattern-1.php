<?php
//Example #1 array_map() example 

function cube($n)
{
    return($n * $n * $n);
}
$a = array("dhananjay", 2, 3, 4, 5);
$b = array_map("strlen", $a);
print_r($b) . PHP_EOL;
?> 


<?php

$a = "hi,world";
$b = array_map("strtoupper", explode(",", $a));
print_r($b) . PHP_EOL;
?>


<?php
$s = '13149';
$s[$s[1]] = $s[1]+$s[3];
print_r($s) . PHP_EOL;;
?>


<?php
if ( preg_match("/[^a-z589][A-Z]+/", "AB asdfg589nmGH", $array) ) {
print "<pre>\n";
print_r( $array );
print "</pre>\n";
}
?>