<?php
/*
 * Examples

Example #1 DateTimeZone::getLocation() example

*/
$tz = new DateTimeZone("Asia/Calcutta");

echo $tz->getName() . " \n";


$tz = new DateTimeZone("Asia/Calcutta");
print_r($tz->getLocation());
print_r(timezone_location_get($tz));
?>
