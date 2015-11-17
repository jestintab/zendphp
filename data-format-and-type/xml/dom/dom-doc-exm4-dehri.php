<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$dom = new DOMDocument();
$sRoot = $dom->createElement('familyTree');
$dom->appendChild($sRoot);

$fmn1 = $dom->createElement('family');

$nm1 = $dom->createElement('name');
$nm1t = $dom->createTextNode('N K SHARMA');

$ag1 = $dom->createElement('age');
$ag1t = $dom->createTextNode('58');

$nm1->appendChild($nm1t);
$ag1->appendChild($ag1t);

$fmn1->appendChild($nm1);
$fmn1->appendChild($ag1);

$sRoot->appendChild($fmn1);


$fmn1 = $dom->createElement('family');

$nm1 = $dom->createElement('name');
$nm1t = $dom->createTextNode('D K SHARMA');

$ag1 = $dom->createElement('age');
$ag1t = $dom->createTextNode('38');

$nm1->appendChild($nm1t);
$ag1->appendChild($ag1t);

$fmn1->appendChild($nm1);
$fmn1->appendChild($ag1);

$sRoot->appendChild($fmn1);

echo $dom->save('fmt.xml');
?> 