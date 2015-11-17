
<?php
/*
 * Examples
 * Example #1 Saving a HTML tree into a string 
 */
$doc = new DOMDocument('1.0');
$root = $doc->createElement('html');
$root = $doc->appendChild($root);

$head = $doc->createElement('head');
$head = $root->appendChild($head);

$title = $doc->createElement('title');
$title = $head->appendChild($title);

$text = $doc->createTextNode('This is the title');
$text = $title->appendChild($text);

$body = $doc->createElement('body');
$root->appendChild($body);

$sH1 = $doc->createElement('h1');  
$sText = $doc->createTextNode('Welcome to DomDocument');
$sH1->appendChild($sText);

$body->appendChild($sH1);

echo $doc->saveHTML();

#echo $doc->saveHTMLFile('htmltestfile.html'); // working 
?> 