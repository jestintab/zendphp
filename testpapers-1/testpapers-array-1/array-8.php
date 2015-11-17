<?php
    $car = array(
        'price'  => '154.58 lacs',
        'year'  => 2010,
        'make'  => 'Porsche',
        'model' => 911
    );
   
    end($car);
    while ($value = next($car)) {
        echo $value;
    }
?>

