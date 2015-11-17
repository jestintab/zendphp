<?php  
  $fr = fopen("php://stdin", "r");
  $fw = fopen("php://stdout", "w");
 
  fscanf($fr, "%d", $d);
  fprintf($fw, "%d", $d);
 
  fclose($fr);
  fclose($fw);
?>