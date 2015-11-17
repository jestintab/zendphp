
<?php
$a = "a, b,c, d, e f, g";
$b = array_merge(explode(', ', $a), array("a", "b")); 
echo count($b);
?>