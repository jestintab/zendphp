<?php
include ('xml-string-1.php');
#Example #4 Accessing non-unique elements in SimpleXML

#When multiple instances of an element exist as children of a single parent element, normal iteration techniques apply.

$movies = new SimpleXMLElement($xmlstr);

/* For each <character> node, we echo a separate <name>. */
foreach ($movies->movie->characters->character as $character) {
	#print_r($character);
   	echo $character->name, ' played by ', $character->actor, PHP_EOL, "</br>";
}
#Note:Properties ($movies->movie in previous example) are not arrays. They are iterable and accessible objects.
?>