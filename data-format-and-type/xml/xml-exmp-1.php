<?php
include ('xml-string-1.php');
$movies = new SimpleXMLElement($xmlstr);
echo $movies->movie[0]->characters->character[0]->name;// basic way to get 

?>
