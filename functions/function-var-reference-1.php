<?php
//What is the output of the following?
function a(&$number)
{
    echo $number . " L3 " . PHP_EOL;
    //$number = $number * $number;
    //$number = b($number) * $number;
    
    echo $number . " L6 " . PHP_EOL;
    
    //echo "I AM HERE [" . b($number) . "] HERE END \n";
    
    return (b($number) * $number);
    
    //return $number;
    /*
        $number = $number*$number;
        return $number;
    */
     
}

function b(&$number){
  ++$number;
  echo $number . " L4 " .  PHP_EOL;
}

$fiveStar = 5;

echo a($fiveStar) . " L1 " .  PHP_EOL;

echo $fiveStar . " L2 " .  PHP_EOL;
?>