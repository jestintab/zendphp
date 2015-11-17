<?php
include ('xml-string-1.php');
#Example #10 Adding elements and attributes

#Since PHP 5.1.3, SimpleXML has had the ability to easily add children and attributes.

$movies = new SimpleXMLElement($xmlstr);

$character = $movies->movie[0]->characters->addChild('character');
$character->addChild('name', 'Mr. Parser');
$character->addChild('actor', 'John Doe');

$rating = $movies->movie[0]->addChild('rating', 'PG');
$rating->addAttribute('type', 'mpaa');

echo $movies->asXML();
?>