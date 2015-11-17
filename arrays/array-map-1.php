<?php
#Example #1 array_map() example
function square($n)
{
    return($n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("square", $a);
print_r($b);
?>