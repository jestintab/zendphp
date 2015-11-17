<?php
//Example #1 ArrayObject::exchangeArray() example

echo 'Example #1 ArrayObject::exchangeArray() example' . "\n";

// Array of available fruits
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);
// Array of locations in Europe
$locations = array('Amsterdam', 'Paris', 'London');
echo "<pre>";
$fruitsArrayObject = new ArrayObject($fruits);
echo "Fruits array : \n\n";
print_r($fruitsArrayObject);

// Now exchange fruits for locations
$old = $fruitsArrayObject->exchangeArray($locations);
echo "Fruits old : \n\n";
print_r($old);

echo "Fruits new as Location : \n\n";
print_r($fruitsArrayObject);


$old = $fruitsArrayObject->exchangeArray($fruits);
echo "Fruits old as Location: \n\n";
print_r($old);

echo "Fruits new as fruits: \n\n";
print_r($fruitsArrayObject);

echo  "Get Flags name \n";

print $fruitsArrayObject->getFlags();

echo  "\n\n Iterator:\n";
$oIterator =  $fruitsArrayObject->getIterator();
echo $oIterator->count() . "\n\n";

for($oIterator; $oIterator->valid(); $oIterator->next()){
	echo "1st For: ". $oIterator->key() . " --- " . $oIterator->current() . " \n";
}
echo "\n\n";
$oIterator->rewind();
for($oIterator; $oIterator->valid(); $oIterator->next()){
	echo "2nd For: ". $oIterator->key() . " --- " . $oIterator->current() . " \n";
}

echo "\n\n";
#$oIterator->rewind();


for($oIterator; $oIterator->valid(); $oIterator->next()){
	echo "3rd For: ". $oIterator->key() . " --- " . $oIterator->current() . " \n";
}


echo " Seek : " .  $oIterator->seek(2) . "\n\n";

$oIterator->rewind();
echo " offsetExists : " .  $oIterator->offsetExists(0) . "\n\n";
?>
