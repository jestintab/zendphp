<?php
    $myArray = array('a', 'b', 'c');

    foreach ($myArray as $k => $v) {
        echo $v;

        for ($i = 1; $i < 5; $i++) {
            if ($i == $k) {
                break;
            }

            echo $i;
        }
    }
?>


<?php
    echo "" . PHP_EOL;
    
    $myArray = array('a', 'b', 'c');

    foreach ($myArray as $k => $v) {
        echo $v;

        for ($i = 1; $i < 5; $i++) {
            if ($i == $k) {
                break(2);
            }

            echo $i;
        }
    }
?>

