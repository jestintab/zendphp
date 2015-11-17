<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("xml.node-2.xml");

$x = $xmlDoc->documentElement;

foreach ($x->childNodes AS $item) { 
	print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?> 
