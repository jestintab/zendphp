<?php
#Example #2 array_filter() without callback
$entry = array(
             0 => 'foo',
             1 => false,
             2 => -1,
             3 => null,
             4 => '3',
             5 => 9,
             6 => '3',
             7 => true,
          );

print_r(array_filter($entry));
?>