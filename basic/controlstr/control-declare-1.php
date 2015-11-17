<?php
#Example #1 Tick usage example

declare(ticks=1);
echo "\n";
// A function called on each tick event
function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler');

$a = 1;

if ($a > 0) {
    $a += 2;
    print($a) . "\n";
}

?>
