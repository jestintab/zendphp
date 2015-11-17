<?php
include ('xml-string-1.php');
#Example #9 Setting values

#Data in SimpleXML doesn't have to be constant. The object allows for manipulation of all of its elements.

$movies = new SimpleXMLElement($xmlstr);

$movies->movie[0]->characters->character[0]->name = 'Miss Coder';

echo $movies->asXML();
?>