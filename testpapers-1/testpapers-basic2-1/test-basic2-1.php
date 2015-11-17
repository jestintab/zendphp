<?php
    define('MYCONSTANT', 0);

    if (empty(MYCONSTANT)) {
        echo "Hello";
    }
    else {
        echo "Goodbye";
    }
?>


<?php
    $number = 100;

    echo $number < 10 ? "a" : ($number > 100 ? "b" : "c") . PHP_EOL;
?>

<?php
    $aa = ord('a');
    $bb = ord('e');
    
    for ($i = $aa; $i < $bb ; $i++);
        echo chr($i) . PHP_EOL;
?>


<?php
    for ($i = 5; ; $i++) {
        if ($i < 10) {
            break;
        }
    }

    echo $i . PHP_EOL;
?>