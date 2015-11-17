<?php
gc_enable(); // Enable Garbage Collector
var_dump(gc_enabled()); // true
echo "<br/>";
var_dump(gc_collect_cycles()); // # of elements cleaned up
gc_disable(); // Disable Garbage Collector
echo "<br/>\n";
var_dump(gc_enabled()); // true
echo "<br/>\n";
?>
