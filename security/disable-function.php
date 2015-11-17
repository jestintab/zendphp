<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
$aa=	shell_exec("ls -ltr");
echo "<pre>";
print_r($aa);
echo "</pre>";
?>
