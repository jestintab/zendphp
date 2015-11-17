<?php
#Example #2 http_build_query() with numerically index elements.
$data = array('foo', 'bar', 'baz', 'boom', 'cow' => 'milk', 'php' =>'hypertext processor');

echo http_build_query($data) . "\n\n";
echo http_build_query($data, 'myvar_') . "\n\n";
?>
