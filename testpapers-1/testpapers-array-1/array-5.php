<?php
    $myArray = array(
        0,
        NULL,
        '',
        '0',
        99,
        -1
    );
    $aa = array_filter($myArray);
    print_r($aa);
    
    echo count($aa);
?>