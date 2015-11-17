<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<pre>"; 

$is_apc_installed = extension_loaded('apc');
echo "[$is_apc_installed]" . PHP_EOL;
// Example #1 A apc_add() example
$bar = 'BAR';
apc_add('foo', $bar);
print_r(apc_fetch('foo'));

//apc_delete('foo');

echo "\n";
$bar = 'NEVER GETS SET NEW ';
apc_add('foonew', $bar);

print_r(apc_fetch('foonew'));
apc_delete('foo');
echo "\n";
apc_cas('foo', 1, 2);
print_r(apc_fetch('foo'));
 
print_r(apc_cache_info());

print_r(apc_bin_dump());

apc_bin_dumpfile(array(),array('foo','foonew'),"aa.txt");
echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
?>
