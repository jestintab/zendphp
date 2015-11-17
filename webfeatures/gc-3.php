<?php
#Example #3 Increasing refcount of a zval
$a = "new string";
$b = $a;
$c = $a;
xdebug_debug_zval( 'a' );
?>
