<?php
error_reporting(E_ALL);
ini_set("display_errors",0);
//The same syntax can be used with functions that return references, and with the new operator (since PHP 4.0.4 and before PHP 5.0.0):

function find_var($bar){
}

$bar = null;

$foo =& find_var($bar);


?>
