<?php
    $str = "It's \"good\"";
    echo  $str . PHP_EOL;
    
    echo strlen("It's \"good\"") . PHP_EOL;
    
    $str2 = addslashes($str);
    
    echo $str2 . PHP_EOL;
    
    echo strlen($str2);
?>


<?php
    $number = 55;
    $len    = 3;
    $pad    = '$';

    echo str_pad($number, $len, $pad, STR_PAD_LEFT) . PHP_EOL;
?>


<?php
    $name = 'Judy';

    $str1 = <<<EOF
Hello $name
EOF;

    $str2 = <<<'EOF'
Goodbye $name;
EOF;

    echo strpos($str1, $name). PHP_EOL;

    if (strpos($str1, $name) === false) {
        echo 'a' . PHP_EOL;
    }
    else {
        echo 'b'. PHP_EOL;
    }
    
    echo $str1 . PHP_EOL;
    
    echo $str2 . PHP_EOL;
    
    if (strpos($str2, $name) === false) {
        echo 'c'. PHP_EOL;
    }
    else {
        echo 'd'. PHP_EOL;
    }
?>


<?php
    $str = 'stintgesrs';

    echo strtr($str, 'sti', 'blr') . PHP_EOL;
?>


<?php
    $aRr = array(2,4,5,6,"", null,);
    
    print_r($aRr);
    
    $str = ',val1,val2,,,val4,,,,';
    $aa = explode(',', $str);
    print_r($aa);
    
    echo count($aa);
?>

