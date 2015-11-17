<?php
/*
 * Examples

Example #1 DatePeriod example


*/

$start = new DateTime('2012-07-01');
$interval = new DateInterval('P4D');
$end = new DateTime('2012-07-31');
$recurrences = 6;
$iso = 'R6/2012-07-01T00:00:00Z/P4D';

// All of these periods are equivalent.
$period = new DatePeriod($start, $interval, $recurrences);
$period = new DatePeriod($start, $interval, $end);
$period = new DatePeriod($iso);

// By iterating over the DatePeriod object, all of the
// recurring dates within that period are printed.
foreach ($period as $date) {
    echo $date->format('Y-m-d')."\n";
}
?>
