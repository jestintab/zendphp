<?php
/*Examples
Example #1 DateTime::setDate() example
Object oriented style
*/

$date = new DateTime();
echo $date->format('Y-m-d') . "\n";

$date->setDate(2001, 1, 345);
echo $date->format('Y-m-d') . "\n";
?>
