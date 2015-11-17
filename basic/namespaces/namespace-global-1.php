<?php
#Example #1 Using global space specification
namespace A\B\C;

error_reporting(E_ALL);
ini_set('display_error',1);

/* This function is A\B\C\fopen */
function file() { 
     /* ... */
     $f = \file('text.txt'); // call global fopen
     return $f;
} 

#	$aData = \A\B\C\file();
#	print_r($aData);
	
?>
