<?php
#Example #2 Type Casting and Overwriting example
class Family{
	
	function __construct(){
		echo "Init done " ."\n";
	}
}

$oFamily = new Family();

$aName = array(99 => 1, 34, 100 => 56);

print_r($aName);
echo "\n";

$aName = [99 => 1, 34, 100 => 56];

print_r($aName);
echo "\n";

$array = array(
    1    => "a",
    "1"  => "b",
    5.99  => "c",
    true => "d",
    $oFamily => "object family",
    $aName => "array name name",
);
print_r($array);

?>
