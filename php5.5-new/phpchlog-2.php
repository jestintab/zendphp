<?php
function xrange($start, $limit, $step = 1) {
    for ($i = $start; $i <= $limit; $i += $step) {
        yield $i;
    }
}

echo 'Single digit odd numbers: ';

/*
 * Note that an array is never created or returned,
 * which saves memory.
 */
foreach (xrange(1, 210000, 3) as $number) {
    echo "$number ";
}
echo "echo \n";

for ($i = 1; $i <= 210000; $i++) {
       echo $i . ",";
}
echo "\n";

echo memory_get_usage(true) . PHP_EOL;
?>