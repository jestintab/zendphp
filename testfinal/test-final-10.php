<?php
// An invalid UTF8 sequence
$text = "\xB1\x31";

$json  = json_encode($text);
$error = json_last_error();
$error1 = json_last_error_msg();
print_r($error1);

var_dump($json, $error === JSON_ERROR_UTF8);
?>
