<?php
#Array do's and don'ts
// Show all errors
error_reporting(E_ALL);

$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as $color) {
    echo "Do you like $color?\n";
}
echo "\n\n";
// PHP 5
foreach ($colors as &$color) {
    $color = ucwords($color);
}
unset($color); /* ensure that following writes to $color will not modify the last array element */

print_r($colors);
echo "\n\n";
// Workaround for older versions
foreach ($colors as $key => $color) {
    $colors[$key] = strtoupper($color);
}

print_r($colors);
echo "\n\n";
?>
