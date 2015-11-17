<?php
//Example #1 tempnam() example
$tmpfname = tempnam("/var/www/more", "FOO");

$handle = fopen($tmpfname, "w");
fwrite($handle, "writing to tempfile");
fclose($handle);

echo $tmpfname . PHP_EOL;

// do here something

//unlink($tmpfname);
?>
