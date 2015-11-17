<?php
/*
Examples
Example #1 DateInterval example
*/
$interval = new DateInterval('P2Y4DT6H8M');
$oDateTime = new DateTime();

echo $oDateTime->format("Y-m-d H:i:sP") . "\n";

$oDateTime->add($interval);

echo $oDateTime->format("Y-m-d H:i:sP") . "\n";
/*$interval = new DateInterval('P2Y4DT6H8MD'); // Error
 * PHP Fatal error:  Uncaught exception 'Exception' with message 'DateInterval::__construct(): Unknown or bad format (P2Y4DT6H8MD)' in /var/www/newphpcert/data format and type/dateTime/dateInterval-exm1.php:6
Stack trace:
#0 /var/www/newphpcert/data format and type/dateTime/dateInterval-exm1.php(6): DateInterval->__construct('P2Y4DT6H8MD')
*/
?>
