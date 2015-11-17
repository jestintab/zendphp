<?php
/*Examples

Example #1 DateTime::modify() example

Object oriented style
*/
$date = new DateTime('2006-12-12');
$date->modify('+1 day');
echo $date->format('Y-m-d') . "\n";
?>
