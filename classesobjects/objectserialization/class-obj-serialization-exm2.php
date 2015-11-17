<?php
    include("class-obj-serialization-exm1.php");

    $a = new A;
    $s = serialize($a);
    // store $s somewhere where page2.php can find it.
    file_put_contents('store', $s); 

    $b = new B;
    $s2 = serialize($b);
    file_put_contents('store2', $s2); 