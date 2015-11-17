<?php
#Example #1 Using references with undefined variables
function foo(&$var) {
	
}

foo($a); // $a is "created" and assigned to null


$b = array();
foo($b['b']);

var_dump(array_key_exists('b', $b)) . PHP_EOL; // bool(true)

$c = new StdClass;
foo($c->d);
var_dump(property_exists($c, 'd')) . PHP_EOL; // bool(true)
$c->d = 'This is India';

echo $c->d . PHP_EOL;
?>
