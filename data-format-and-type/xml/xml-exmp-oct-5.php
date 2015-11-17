<?php
include ('xml-string-1.php');
#Example #5 Using attributes

#So far, we have only covered the work of reading element names and their values. SimpleXML can also access element attributes. Access attributes of an element just as you would elements of an array.

$movies = new SimpleXMLElement($xmlstr);

/* Access the <rating> nodes of the first movie.
 * Output the rating scale, too. */
foreach ($movies->movie[0]->rating as $rating) {
    switch((string) $rating['type']) { // Get attributes as element indices
    case 'thumbs':
        echo $rating, ' thumbs up' . PHP_EOL . "<br/>";
        break;
    case 'stars':
        echo $rating, ' stars' . PHP_EOL . "<br/>";
        break;
	case 'up':
		echo $rating, ' thumbs up' . PHP_EOL . "<br/>";
		break;
	case 'down':
		echo $rating, ' thumbs down' . PHP_EOL . "<br/>";
		break;
    }
}
?>