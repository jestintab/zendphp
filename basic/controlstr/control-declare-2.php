<?php
# Example #2 Ticks usage example
function tick_handler()
{
  echo "tick_handler() called\n";
}

$a = 1;
tick_handler();

if ($a > 0) {
    $a += 2;
    tick_handler();
    print($a). "\n";
    tick_handler();
}
tick_handler();

?>
