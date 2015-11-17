<?php
# A notice will be generated if there aren't enough array elements to fill the list():
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b)) {
    echo "A: $a; B: $b;\n";
}
?>
