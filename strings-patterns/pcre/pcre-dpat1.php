<?php
$subject = "abcvdefgandd defljdkfddef";
$pattern = '(def)';
preg_match_all($pattern, $subject, $matches);
print_r($matches);
?>
