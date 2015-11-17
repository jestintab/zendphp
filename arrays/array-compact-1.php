<?php
#Example #1 compact() example

$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";
$landmark = "Opp. Kotak Bank";
$something1 = "Cricket ";

$location_vars = array("city", "state", "landmark");

$location_vars2 = array("name", "age", "sex");

$name = "Dhananjay";
$age = "35";
$sex = "Male";
$result = compact("event", "something1", "nothing_here2", $location_vars, $location_vars2);

print_r($result);
?>