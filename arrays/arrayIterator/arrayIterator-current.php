<?php
#Example #1 ArrayIterator::current() example
#, '9' => array('1' => 'one', '2' => 'two', '3' => 'three', 'Four', '8' => 'Eight')
$array = array('1' => 'one', '2' => 'two', '3' => 'three', 'Four', '8' => 'Eight');
#print_r($array);
$arrayobject = new ArrayObject($array);
#var_dump($arrayobject);
echo "\ngetIterator\n";
for($iterator = $arrayobject->getIterator(); $iterator->valid(); $iterator->next()) {
    echo $iterator->key() . ' => ' . $iterator->current() . "\n";
}
echo "\nforeach\n";
foreach($arrayobject as $key => $val) {
    echo $key  . ' => ' . $val . "\n";
}
?>

