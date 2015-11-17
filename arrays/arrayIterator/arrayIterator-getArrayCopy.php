<?php
$b = array('name'=>'mengzhi','age'=>'12','city'=>'shanghai');
$a = new ArrayIterator($b);
$a->append(array('home'=>'china','work'=>'developer'));
$c = $a->getArrayCopy();
echo "<pre>";
var_dump($a);
var_dump($c);
?>