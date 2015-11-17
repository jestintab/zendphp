<?php
    $a = 15 << 2;
    $b = 10 >> 1;
    $c = 0xF0 >> 4;

    echo sprintf('%d - %d - 0x%X', $a, $b, $c) . PHP_EOL;
?>