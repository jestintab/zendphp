<?php
#Example #5 Position specifier with other specifiers
$num = 99478;
$location = "Bandra";
$new = 'Big size';
$format = 'The %2$s contains %1$06d monkeys %3$s' . "\n";
echo sprintf($format, $num, $location, $new);
?>
