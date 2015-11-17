<?php
    $r = array('m', 't');
    $s = array('i', 'p');
    $t = $r + $s;
    
    $a = array(9=>'z', 'x');
    $b = array('y', 'w', 'j');

    $c = array('a' => 1, 'b' => 2);
    $d = array('c' => 3, 'd' => 4);

    $e = $a + $b;
    $f = $c + $d; 
    
    foreach ($t as $value) {
        echo $value;
    } 
    
    foreach ($e as $value) {
        echo $value;
    }

    foreach ($f as $value) {
        echo $value;
    }
    
    echo PHP_EOL;
?>