<?php
echo "Process title: " . cli_get_process_title() . "\n";
?>

<?php
define("MY_CONSTANT", 1);
print_r(get_defined_constants(true));
?> 
