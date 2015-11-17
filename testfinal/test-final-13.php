<?php
$temp = tmpfile();
fwrite($temp, "writing to tempfile");
fseek($temp, 0);
echo fread($temp, 1024) . PHP_EOL;
fclose($temp); // this removes the file
?> 