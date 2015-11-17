<?php
    $arr1 = array(
        'a' => 'Apple',
        'b' => 'Banana'
    );

    $arr2 = array(
        'b' => 'Banana',
        'a' => 'Australia',
        'Apple'
    );

    $arr3 = array_diff($arr1, $arr2);
    $arr4 = array_diff($arr2, $arr1);

    $keys = array_keys($arr4);
    print_r($arr3) . PHP_EOL;
    
    print_r($arr4) . PHP_EOL;
    
    print_r($keys) . PHP_EOL;
    
    echo count($arr3) . ' - ' . $keys[0] . PHP_EOL;
?>

