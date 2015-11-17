<?php
$foo = 10;            // $foo is an integer
$str = "$foo";        // $str is a string
$fst = (string) $foo; // $fst is also a string

echo gettype($foo) . ' -- ' . $foo  . "\n";
echo gettype($str) . ' -- ' . $str  . "\n";
echo gettype($fst) . ' -- ' . $fst  . "\n";

$calc = $str + $foo + $fst;
echo "---- Calc: " . $calc . ' -- '  . gettype($calc) . "\n";

// This prints out that "they are the same"
if ($fst === $str) {
    echo "they are the same";
}
?>
