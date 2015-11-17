<?php
#Evaluate a string as PHP code:
$string = "beautiful";
$time = "winter";

$str = 'This is a $string $time morning!';
echo $str. "\n";

eval("\$str = \"$str\";");
echo $str. "\n";
$someData = '99+88';
eval ("\$someData");

?>
