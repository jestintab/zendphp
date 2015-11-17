<?php
$array = [[1, 2, 5], [3, 4, 6]];

foreach ($array as list($a, $b, $c)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "A: $a; B: $b; C: $c\n";
}
?>
