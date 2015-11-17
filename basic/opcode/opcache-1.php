<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<pre>"; 
$file = "apc-1.php"; 
//echo opcache_compile_file($file);


echo "<br/><br/>";

opcache_reset();

print_r(opcache_get_status());


//var_dump(opcache_get_configuration());
?>