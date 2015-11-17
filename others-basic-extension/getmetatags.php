<?php
#Example #2 What get_meta_tags() returns
// Assuming the above tags are at www.example.com
$url = 'http://www.dumplingsphotography.com';
$tags = get_meta_tags($url);

print_r($tags);
die();
// Notice how the keys are all lowercase now, and
// how . was replaced by _ in the key.
echo $tags['author'] . "\n";       // name
echo $tags['keywords'] . "\n";   // php documentation
echo $tags['description'] . "\n";  // a php manual
echo $tags['geo_position'] . "\n"; // 49.33;-86.59
?>
