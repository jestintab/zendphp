
<?php 
    $a = array (1, 2, 3);
    $b = array (1 => 2, 2 => 3, 0 => 1); 
    $c = array ('a' => 1, 'b' => 2, 'c' => 3);
    var_dump ($a == $b); 
    var_dump ($a === $b); 
    var_dump ($a == $c); 
    
    print_r($a) . PHP_EOL;
    
    
    print_r($b) . PHP_EOL;
    
    print_r($c) . PHP_EOL;
?>

