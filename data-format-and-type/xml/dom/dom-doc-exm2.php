<?php
//--- not working I have to check in mumbai
error_reporting(E_ALL);
ini_set("display_errors", 1);
$dom2 = new DOMDocument();
$dom2->validateOnParse = true;
$dom2->load('abc.xml');

$sData = $dom2->getElementById('1247')->tagName;
var_dump($sData);

?> 