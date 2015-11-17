<?php 
// opens a file and read some data -- Example #1 ftell() example
$source = "readline.txt";
$fp = fopen($source, "r");

$filename = 'write-line1.txt';
file_put_contents($filename, $fp);// write the file1 into file2 - #1

$fp2 = fopen("write-line2.txt", "w"); 
fwrite($fp2, file_get_contents($filename));// write the file1 into file2 - #2
 
$src = fopen($source, 'r'); 
$dest = fopen('write-line3.txt', 'w');
stream_copy_to_stream($src, $dest);// write the file1 into file2 - #3
?>