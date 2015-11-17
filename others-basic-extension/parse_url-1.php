<?php
#Example #1 A parse_url() example
$url = 'https://username:password@hostname/path?arg2=158&arg=value#anchor';

print_r(parse_url($url));

echo "\n\n";
echo parse_url($url, PHP_URL_PATH);
/*
 * 
 * Array
(
    [scheme] => https
    [host] => hostname
    [user] => username
    [pass] => password
    [path] => /path
    [query] => arg2=158&arg=value
    [fragment] => anchor
)
*/
?>
