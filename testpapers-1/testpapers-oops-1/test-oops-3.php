<?php
    class A {};
    class B1 extends A {};
    class_alias('A', 'B2');
    $b1 = new B1;
    echo get_class($b1) . PHP_EOL; 
    
    $b2 = new B2;
    echo get_class($b2) . PHP_EOL;
    
    $a = new A;
    echo get_class($a) . PHP_EOL;
?>

<?php
    $abc =  array(-1 => "55", -9 => 88);
    
    print_r($abc);
?>