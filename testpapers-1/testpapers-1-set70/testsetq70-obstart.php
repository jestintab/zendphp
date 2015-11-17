<?php 
ob_start();

echo "Hello "; 

$out1 = ob_get_contents();

echo "World ";

$out2 = ob_get_contents();

echo "Dhananjay!";
$out3 = ob_get_contents();



ob_end_clean(); 

$out4 = ob_get_contents();

var_dump($out1, $out2, $out3, $out4);

echo "" . PHP_EOL;
?>
