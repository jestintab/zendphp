<?php
ini_set('html_errors', true);
$sqlhost = "localhost";
$sqlusername = "unity";
$sqlpassword = "mypass123";

//we will now connect to our database
$sqlcon = mysql_connect($sqlhost, $sqlusername, $sqlpassword) or die("Could not connect to database: " . mysql_error());

?>