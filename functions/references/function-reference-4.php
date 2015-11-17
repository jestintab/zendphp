<?php
/*Note:
If you assign a value to a variable with references in a foreach statement, the references are modified too.
Example #3 References and foreach statement
*/

$ref = 0;
$row =& $ref;
foreach (array(1, 2, 3) as $row) {
    echo "{$row} | {$ref}" . PHP_EOL;
}
echo $ref . PHP_EOL; // 3 - last element of the iterated array
?>
