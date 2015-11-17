<?php
//Example #1 A stream_copy_to_stream() example
$src = fopen('http://orangeagri.com/corporate-govt.php', 'r');
$dest1 = fopen('first1k.txt', 'w');
$dest2 = fopen('remainder.txt', 'w');

echo stream_copy_to_stream($src, $dest1, 1024) . " bytes copied to first1k.txt\n";
echo stream_copy_to_stream($src, $dest2) . " bytes copied to remainder.txt\n";

echo PHP_EOL . PHP_EOL;

$fp = fopen('readline.txt', 'r'); 
$buffer = stream_get_line( $fp, 1024, '\n');
print_r($buffer) . PHP_EOL;
?>