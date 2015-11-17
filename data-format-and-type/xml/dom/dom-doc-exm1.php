<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
#Example #1 Creating a new DOMDocument 
#$dom = new DOMDocument('1.0', 'utf-8');// working
$dom = new DOMDocument();
$sRoot = $dom->createElement('movies');
$dom->appendChild($sRoot);

$sM1 = $dom->createElement('movie', 'The Don'); 
$sAttr = $dom->createAttribute('date'); 
#$sAttr->value = '2014_5_10'; $sM1->appendChild($sAttr); 

$sAttr = $dom->createAttribute('id'); 
$sAttr->value = '1247';
$sM1->appendChild($sAttr); 

$sRoot->appendChild($sM1);

$sM2 = $dom->createElement('movie', 'Hero'); 
$sAttr = $dom->createAttribute('date'); 
#$sAttr->value = '1982_5_10'; $sM1->appendChild($sAttr); 

$sAttr = $dom->createAttribute('id'); 
$sAttr->value = '1246';
$sM2->appendChild($sAttr); 

$sRoot->appendChild($sM2);

echo $dom->save('abc.xml');
?> 