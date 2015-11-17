
<?php
    echo strcmp(9, 5) . PHP_EOL;
?>


<?php
    echo strcmp('xabc', 'abc') . PHP_EOL;
?>


<?php
    $test1 = strcmp('hello', "hello");
    $test2 = strcmp("Hello", "hello");
    $test3 = strcmp('60', '500');
     
    if ($test1 == 0)     { echo "a"; }
    else if ($test1 < 0) { echo "b"; }
    else                 { echo "c"; }

    if ($test2 == 0)     { echo "d"; }
    else if ($test2 < 0) { echo "e"; }
    else                 { echo "f"; }

    if ($test3 == 0)     { echo "g"; }
    else if ($test3 < 0) { echo "h"; }
    else                 { echo "i"; }
?>


<?php
    $str1 = '57 channels';
    $str2 = '1/2 a pack of cigarettes';
    $str3 = '0x10';
   
    if ($str1 == 57) { echo 'a'; }
    else             { echo 'b'; }

    if ($str2 == 0.5)    { echo 'c'; }
    else if ($str2 == 1) { echo 'd'; }
    else                 { echo 'e'; }

    if ($str3 == 0)         { echo 'f'; }
    else if ($str3 == 16)   { echo 'g'; } // 0x10 is 16 in decimal
    else if ($str3 == 0x10) { echo 'h'; }
?>



<?php
    $str = printf('%.1f', 5.3);
    echo trim('PHP ' . $str) . PHP_EOL;
?>

<?php
    $number1 = 250;
    $number2 = 7;

    $format = '%03d'; // %1$03d

    echo sprintf($format, $number1);
    echo sprintf($format, $number2);

    // output is 250007
?>


<?php
    $str = 'I am 30';

    $vals = sscanf($str, '%s %s%d');
    print_r( $vals);
    
    echo trim($vals[0] . ' ' . $vals[1]) . PHP_EOL;
?>

<?php
    $str = '58980';

    $vals = sscanf($str, '%d');
    print_r( $vals);
    
    echo trim($vals[0] . ' ' . $vals[1]) . PHP_EOL;
?>