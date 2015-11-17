<?php
#Example #6 Adding already existing element to an array
$a = array( 'meaning' => 'life', 'number' => 42 );
$a['life'] = $a['meaning'];
xdebug_debug_zval( 'a' );

echo "<br/>";
print_r($a);
?>