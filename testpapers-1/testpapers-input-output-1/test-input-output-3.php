<?php 
// opens a file and read some data -- Example #1 ftell() example
$fp = fopen("readline.txt", "r");
$data = fgets($fp, 6);

// where are we ?
echo ftell($fp) . PHP_EOL; // 11

fclose($fp);

?>
