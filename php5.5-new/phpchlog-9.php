<?php
$arr = array(1, 2, 3, 4);
echo "<post>";
print_r($arr) . PHP_EOL;

foreach ($arr as &$value) {
    $value = $value * 2;
}
echo "<post>";
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element

$value = 5;
print_r($arr) . PHP_EOL; 

?>
