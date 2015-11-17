<?php
#Example #1 ArrayIterator::Get the current flags
$array = array('one' => 'one lakh', 'two' => 'two crores', 'three' => 'three thousand', 'Four Rupees', 'eighT' => 'Eight millions');
#print_r($array);
$arrayobject = new ArrayObject($array);
$arrayobject->setFlags(ArrayIterator::ARRAY_AS_PROPS);

var_dump($arrayobject);

echo  $arrayobject->one;

#echo  $arrayobject->one;
?>

