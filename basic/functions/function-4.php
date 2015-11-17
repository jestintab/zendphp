<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$x = function ($a, $b, $c){
    return print("$c|$b|$a") . PHP_EOL;
};

echo $x(1,2,3) . PHP_EOL;