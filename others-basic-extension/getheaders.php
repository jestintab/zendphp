<?php
# Examples	Example #1 get_headers() example
#$url = 'http://www.rediff.com/';
$url = 'http://www.bollywoodji.com/';

print_r(get_headers($url));

echo "\n\n";
print_r(get_headers($url, 1));

echo "\n\n";
?>
