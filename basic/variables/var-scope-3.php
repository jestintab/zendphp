<?php
#Example #1 Using global

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
    $a = 10;
    return $b;
} 

$d = Sum();
echo 'b ' . $b. "\n\n";
echo 'a ' . $a. "\n\n";

echo 'd ' . $d. "\n\n";
?>
