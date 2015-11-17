<?php
include ('xml-string-1.php');
#Example #6 Comparing Elements and Attributes with Text

#To compare an element or attribute with a string or pass it into a function that requires a string, you must cast it to a string using (string). Otherwise, PHP treats the element as an object.

$movies = new SimpleXMLElement($xmlstr);

if ((string) $movies->movie->title == 'PHP: Behind the Parser') {
    print 'My favorite movie.'. "\n";
}

echo htmlentities((string) $movies->movie->title). "\n";

?>