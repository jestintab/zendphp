<?php
#Example #2 A parse_url() example with missing scheme

$url = '//www.example.com/path?googleguy=googley';

// Prior to 5.4.7 this would show the path as "//www.example.com/path"
print_r(parse_url($url));
?>
