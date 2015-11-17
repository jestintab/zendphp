<?php
/*As of PHP 5.4 it is possible to array dereference the result of a function or method call directly. Before it was only possible using a temporary variable.

As of PHP 5.5 it is possible to array dereference an array literal.

Example #7 Array dereferencing
*/

function getArray() {
    return array(1, 2, 3);
}

// on PHP 5.4
echo $secondElement = getArray()[2];
echo "\n";
// previously
$tmp = getArray();
print_r($tmp);

echo $secondElement = $tmp[1];
echo "\n";
// or
list(, $secondElement) = getArray();
echo $secondElement ;
echo "\n";
?>
