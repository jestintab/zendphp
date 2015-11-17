<?php
#Example #2 Type Casting and Overwriting example
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
    1.9 => "1.9",
    null => "define null",
    "08" => "define 08",
);
echo "<pre>";
print_r($array);
echo count($array);
echo "\n";

$arrayObj =  new ArrayObject($array);

for($iterator = $arrayObj->getIterator(); $iterator->valid(); $iterator->next()){
	echo $iterator->key() . " --- " . $iterator->current() . "\n";
}
?>
