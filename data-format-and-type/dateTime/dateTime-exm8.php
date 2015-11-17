<?php
/*
 * Examples

Example #1 DateTime::diff() example

Object oriented style

*/

$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-12-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days') . "\n";
?>
