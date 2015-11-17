<?php
#Example #1 array_pop() example
$array = array("name");
$sName = array_pop($array);
print $sName . "\n";
print "[". is_null($sName) . "]" . "\n";;

$sName = array_pop($array);
print is_null($sName) . "\n";;

print_r($array);
?>