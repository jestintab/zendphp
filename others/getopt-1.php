<?php
// Script example.php
$options = getopt("f:hp:r:");

echo 'f: ' . $options['f'] . PHP_EOL;

echo 'h: ' . $options['h'] . PHP_EOL;

echo 'p: ' . $options['p'] . PHP_EOL;

echo 'r: ' . $options['r'] . PHP_EOL;

var_dump($options);
?>
