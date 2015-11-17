<?php
/*
 * Examples

Example #1 DateTime::getLastErrors() example

Object oriented style

*/
try {
    $date = new DateTime('ffsafjdsj');
} catch (Exception $e) {
    // For demonstration purposes only...
    print_r(DateTime::getLastErrors());

    // The real object oriented way to do this is
    // echo $e->getMessage();
}
?>
