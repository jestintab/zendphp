<?php

#Example #1 Simple usage of http_build_query()

#string http_build_query ( mixed $query_data [, string $numeric_prefix [, string $arg_separator [, int $enc_type = PHP_QUERY_RFC1738 ]]] )

$data = array('foo'=>'bar',
              'baz'=>'boom',
              'cow'=>'milk',
              'php'=>'hypertext processor');

echo http_build_query($data) . "\n\n";

echo http_build_query($data, '', '&amp;')  . "\n\n";

?>
