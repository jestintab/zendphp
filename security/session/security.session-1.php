<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); 
setcookie("authisvalid","true");
$sid = session_id();

$url = 'security.session-2.php';
$gt = filter_input(INPUT_GET, 'gt', FILTER_VALIDATE_INT);
echo "get cookie from page 2 ". $_COOKIE['authisvalid2'] . "<br/>";
echo "Validated gt: " . $gt . "<br/>";

echo "<a href='security.session-2.php'" . "?sid=" . session_id() .">page 1 </a>";

if ($gt == 2){
    header("Location: " . $url . "?sid=" . session_id() . "&gt=4");
    exit();
}