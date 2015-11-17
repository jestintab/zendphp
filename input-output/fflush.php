<?php
$filename = 'bar.txt';

$file = fopen($filename, 'r+');
rewind($file);
fwrite($file, 'Foo first line '."\n");
fflush($file); 

ftruncate($file, ftell($file));
fclose($file);
?>
