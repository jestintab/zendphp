<?php
#Accessing elements within an XML document that contain characters not permitted under PHP's naming convention (e.g. the hyphen) can be accomplished by encapsulating the element name within braces and the apostrophe.

#Example #3 Getting <line>

include ('xml-string-1.php');
$movies = new SimpleXMLElement($xmlstr);
$sGreatLine = $movies->movie->{'great-lines'}->line; 

echo $sGreatLine . "\n";
?>
