<?php
$array = array('1' => 'one', '2' => 'two', '3' => 'three' , '4' => 'four');
$arrayobject = new ArrayObject($array);
echo "<pre>";
var_dump($arrayobject);
?>
