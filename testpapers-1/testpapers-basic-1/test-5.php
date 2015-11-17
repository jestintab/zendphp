<?php
for($x = 1; $x <= 2; $x++){
      for($y = 1; $y <= 3; $y++){
         if ($x == $y) continue; 
         print("x = $x  y =  $y") . PHP_EOL;
      }
   }
?>

