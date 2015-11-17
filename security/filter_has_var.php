<?php
#$_GET['test']
$bTestFound = filter_has_var(INPUT_GET, 'test');
echo ' Test get: ' . $bTestFound . "\n<br/>";
?>
