<?php
/*
 * Example #1 DateTime::setISODate() example

Object oriented style

*/
$date = new DateTime();

$date->setISODate(2008, 2);
echo $date->format('Y-m-d') . "\n";

$date->setISODate(2008, 2, 7);
echo $date->format('Y-m-d') . "\n";
?>
