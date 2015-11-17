<?php
$values = array(
        array(
            1 => 10,
            20,
            array(30, array(40))
        ),
        array(
            2 => 50,
            array(
                array(1 => 60, 0 => 70)
            )
        )
    );

print_r($values) . PHP_EOL;

?>

<?php
$aFruits = array('Apple', 'Banana', 'carrot');

print_r($aFruits) . PHP_EOL;

unset($aFruits[0]); 

print_r($aFruits) . PHP_EOL;
?>

<?php

$arr = array(15 => 0); 

print_r($arr) . PHP_EOL;

?>


<?php
    $info = array(
        'Paul',
        31,
        'Australia'
    );
    
    list($name,$age,$country) = $info;
    print "{$name}, {$country}" . PHP_EOL;
    
?>


<?php
    error_reporting(E_ALL | E_STRICT);
    define(E_ALL, 'dfdfdad');
    
    echo E_ALL  . PHP_EOL;
    
    $newArray[E_STRICT] = 'foo';
    
    print_r($newArray);
    
?>


<?php
    $arr = array_flip(array(
        'a' => 1,
        'b' => 2,
        'c' => 3
    ));
    
    print_r($arr) . PHP_EOL;
    
    $bc = array_values($arr);
    
    print_r($bc) . PHP_EOL;
    
    foreach ($bc as $k => $v) {
        echo $k;
    }
?>


