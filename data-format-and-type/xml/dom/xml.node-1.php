<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("xml.node-1.xml");

print $xmlDoc->saveXML();
?> 
