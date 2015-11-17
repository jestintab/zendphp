<?php
$a = 0;
recursion($a);
# Example #4 Recursive functions
function recursion($a)
{
    if ($a < 50) {
        echo "$a\n";
        recursion($a + 1);
    }
}
?>
