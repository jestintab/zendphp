<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function table(){
     $sum = 0;
     $cnt = func_num_args();
     for($i=0; $i < $cnt; $i++){
        $sum += func_get_arg($i);
     }
     
     return $sum;
}

echo table(1,2.5,4.5) . PHP_EOL; //8

