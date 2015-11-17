<?php
  include("class-obj-serialization-exm1.php"); 
  // this is needed for the unserialize to work properly. 
  $s = file_get_contents('store');
  $a = unserialize($s);
  // now use the function show_one() of the $a object.  
  $a->show_one();
  
  $a->show_two();
  
  
    // this is needed for the unserialize to work properly. 
  $s2 = file_get_contents('store2');
  $b = unserialize($s2);
  // now use the function show_one() of the $a object.  
  $b->show_one();
  
  $b->show_two();