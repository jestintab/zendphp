
<?php 
      echo strtotime("january 1, 1901"); 
      
      
?>



<?php
         echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1995)); 
?>



<?php
    $x =25;
    while($x<10)
    {
        $x--; 
    }
    print ($x); 
?>



<?php
         echo "Print this ".  date("M-d-Y", mktime(0, 0, 0, 12, 32, 1965));
?>


<?php
    echo (int) ((0.1 + 0.7) * 10) . PHP_EOL;
?>

<?php

$a = 17.99 % 1;

echo $a . PHP_EOL;

?>

<?php
 echo 0x33, ' birds sit on ', 022, ' trees.' . PHP_EOL;
?>


<?php
    $a = 6 - 10 % 4;
    echo $a . PHP_EOL;;
?>

<?php
    $a = 10;
    $b = 30;
    echo "a:$a, b:$b " . PHP_EOL;
    
    list($b, $a) = array($a, $b);
    
    echo "a:$a, b:$b " . PHP_EOL;
    
    $a = $a+$b;
    $b = $a-$b;
    $a = $a-$b;
    echo "a:$a, b:$b " . PHP_EOL;
?>