<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

class C {}
echo "end ";
/* The following line generates the following error message:
 * Deprecated: Assigning the return value of new by reference is deprecated in...
 */
$o = new C;

echo "end ";
?>
