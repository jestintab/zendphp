<?php
    $aAge = array(range(0,9));
    print_r($aAge);
?>

<?php
    $aAge2 = array_fill(8, 12, range(10,-9));
    print_r($aAge2);
?>


<?php
    $numbers = range(1, 5);
    //shuffle($numbers);
    print_r($numbers);
?>
<?php

  $values = array(
        18,
        12,
        "15",
        34,
        15 => 25,
        "12",
        12,
        15
    );
  
    print_r($values) . PHP_EOL;
    
    $key = array_search(18, $values);
    
    echo "[{$key}]" . PHP_EOL;
    
    if ($key) {
      echo "Not found" . PHP_EOL;;
    }
    else {
      // gettype() will return either 'string' or 'integer'
      echo $key . ' - ' . strtolower(gettype($values[$key])) . PHP_EOL;
    }
?>

<?php
    $a = 0;
    if (!$a){
        echo "In not" . PHP_EOL;
    }
    else{
        echo "In " . PHP_EOL;
    }
?>