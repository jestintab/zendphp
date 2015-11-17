<?php
#Example #3 Beware when adding months
$date = new DateTime('2012-12-31');
$interval = new DateInterval('P1M');

$date->add($interval);
echo $date->format('Y-m-d') . "\n";

$date->add($interval);
echo $date->format('Y-m-d') . "\n";
?>
