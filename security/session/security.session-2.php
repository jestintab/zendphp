<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 
session_start();  
echo "get cookie ". $_COOKIE['authisvalid'] . "<br/>";
setcookie("authisvalid2","set in page2");
$sid = session_id();  
$gt = filter_input(INPUT_GET, 'gt', FILTER_VALIDATE_INT);
echo "Validated gt: " . $gt . "<br/>";

echo "<a href='security.session-1.php'" . "?sid=" . $sid . "&gt=4>page 2 </a>";

$url = 'security.session-1.php';
if ($gt == 1){
    header("Location: " . $url . "?sid=" . session_id() . "&gt=4");
    exit();
}