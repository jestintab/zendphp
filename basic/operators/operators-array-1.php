<?php
$a = array("a" => "apple", "b" => "banana", "d" => "dry friuts");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
echo "Union of \$a and \$b: \n";
print_r($c);//Union of $a and $b: Array ( [a] => apple [b] => banana [d] => dry friuts [c] => cherry )

$c = $b + $a; // Union of $b and $a
echo "Union of \$b and \$a: \n";
print_r($c);// Union of $b and $a: Array ( [a] => pear [b] => strawberry [c] => cherry [d] => dry friuts )
?>
