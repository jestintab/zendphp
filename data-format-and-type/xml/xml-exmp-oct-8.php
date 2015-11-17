<?php
include ('xml-string-1.php');
#Example #8 Using XPath

#SimpleXML includes built-in XPath support. To find all <character> elements:

$movies = new SimpleXMLElement($xmlstr);

foreach ($movies->xpath('//character') as $character) {
    echo $character->name, 'played by ', $character->actor, PHP_EOL;
}
?>