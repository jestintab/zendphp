<?php
#Example #8 Adding the array itself as an element of it self
$a = array( 'one' );
$a[] =& $a;
xdebug_debug_zval( 'a' );
?>