<?php
include ('xml-string-1.php');
#Example #7 Comparing Two Elements

#Two SimpleXMLElements are considered different even if they point to the same element since PHP 5.2.0.

$movies1 = new SimpleXMLElement($xmlstr);
$movies2 = new SimpleXMLElement($xmlstr);
var_dump($movies1 == $movies2); // false since PHP 5.2.0
?>