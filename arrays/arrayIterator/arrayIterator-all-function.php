<?php
#Example #1 ArrayIterator::allfunction testing
$array = array('1' => 'one', '2' => 'two', '3' => 'three', 'Four', '8' => 'Eight');
#$arrayobject = new ArrayObject($array, ArrayObject::ARRAY_AS_PROPS);
$arrayobject = new ArrayObject($array);
var_dump($arrayobject);

echo "\ngetIterator\n";
for($iterator = $arrayobject->getIterator(); $iterator->valid(); $iterator->next()) {
    echo $iterator->key() . ' => ' . $iterator->current() . "\n";
}
echo "[";
echo $iterator->count();
echo "]";

var_dump($arrayobject);

#echo $iterator->setFlags(6);
echo "[" . $iterator->getFlags() ."]";

echo $iterator->valid() . "\n";
echo $iterator->current() . "\n";
echo $iterator->next() . "\n";
echo $iterator->seek(3) . "\n";
echo $iterator->key() . "\n";
echo $iterator->current() . "\n";

echo $iterator->seek(0) . "\n";
echo $iterator->key() . "\n";
echo $iterator->current() . "\n";
?>

