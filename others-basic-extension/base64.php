<?php
#Example #1 base64_decode() example
$str = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==';
echo "\n";
echo  $dStr = base64_decode($str);
echo "\n";
echo base64_encode($dStr);
echo "\n";
?>
