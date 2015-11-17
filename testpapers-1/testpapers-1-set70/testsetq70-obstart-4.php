<?php
ob_start();
echo "dreaming";
echo " hey";
$ob = ob_get_contents(); 
echo strlen($ob) . PHP_EOL;
ob_flush();
?>
