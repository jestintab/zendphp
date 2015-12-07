<?php
$foo = 10;            // $foo is an integer
$str = "$foo";        // $str is a string
$fst = (string) $foo; // $fst is also a string

echo gettype($foo) . ' -- ' . $foo  . "\n"; //integer -- 10
echo gettype($str) . ' -- ' . $str  . "\n"; //string -- 10
echo gettype($fst) . ' -- ' . $fst  . "\n"; // string -- 10

$calc = $str + $foo + $fst;
echo "---- Calc: " . $calc . ' -- '  . gettype($calc) . "\n"; //-- Calc: 30 -- integer

// This prints out that "they are the same"
if ($fst === $str) {
    echo "they are the same";
}
?>
