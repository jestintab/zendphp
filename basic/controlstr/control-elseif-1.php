<?php
$a = 4.00;
$b = 4;
if ($a > $b) {
    echo 'Line no. ' . __LINE__ . " a is bigger than b" . "\n";
} elseif ($a === $b) {
    echo 'Line no. ' . __LINE__ . " a is equal to b" . "\n";
} else if ($a == $b) {
    echo 'Line no. ' . __LINE__ . " a is equal to b" . "\n";
} else {
    echo 'Line no. ' . __LINE__ . " a is smaller than b" . "\n";
}
?>
