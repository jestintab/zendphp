<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<pre>"; 
$file = "apc-1.php"; 
echo apc_compile_file($file);

?>
