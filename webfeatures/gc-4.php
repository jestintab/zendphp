<?php
#Example #4 Decreasing zval refcount
$a = "new string";
$c = $b = $a;
xdebug_debug_zval( 'a' );
unset( $b, $c );
xdebug_debug_zval( 'a' );
$c = $b = $a;
xdebug_debug_zval( 'a' );
unset($a);
echo "[";
xdebug_debug_zval( 'a' );
echo "]";
?>
