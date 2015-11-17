<?php
    $filenames = array(
        'img12.png',
        'img7.png',
        'img21.png',
        'img1.png'
    );

    natsort($filenames);
    $values = array_values($filenames);
    print_r($filenames);
   
    echo "" . PHP_EOL;
    
    echo $values[1];
?>


<?php
    $fruitAndVeg = array(
        'c' => 'Carrot',
        'p' => 'Tomato',
        'b' => 'Banana',
        't' => 'Potato',
        'a' => 'Apple'
    );
    print_r($fruitAndVeg) . PHP_EOL; 
    /** line **/
    ksort($fruitAndVeg); 
    $keys = array_keys($fruitAndVeg);

    echo $keys[0] . PHP_EOL;
?>
