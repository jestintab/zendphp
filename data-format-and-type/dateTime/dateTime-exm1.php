<?php
/*Examples

Example #1 DateTime::__construct() example

Object oriented style
*/
try {
    $date = new DateTime();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";    
    exit(1);
}

/* $date = new DateTime(); // current date 
 * 
 * 2014-08-23
 * */

/* $date = new DateTime(' 2000-01-109');	// Error
DateTime::__construct(): Failed to parse time string ( 2000-01-109) at position 10 (9): Unexpected character
*/

/* $date = new DateTime('2000-02-32');
 * DateTime::__construct(): Failed to parse time string (2000-02-32) at position 9 (2): Unexpected characte
 * */ 

/*$date = new DateTime('2000-02-31');
* 
* 2000-03-02
* 
*/
echo $date->format('Y-m-d') . "\n";

echo $date->format('Y-m-d H:i:sP') . "\n";
/* 2014-08-24
 * 2014-08-24 23:30:40+05:30
 * *
?>
