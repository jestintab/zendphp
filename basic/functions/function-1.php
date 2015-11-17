<?php
function increment($val){
    return ++$val;
}
$val = 1;
echo increment($val) . PHP_EOL;

echo "Function 2:" . PHP_EOL;
function increment2($val){
    return $val++;
}
$val = 1;
echo increment2($val) . PHP_EOL;
