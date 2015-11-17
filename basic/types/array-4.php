<?php
#Example #7 Array dereferencing
function getArray() {
    return array(1, 2, 3, 5);
}

// on PHP 5.4
$secondElement = getArray()[1];

print "$secondElement \n\n";

// previously
$tmp = getArray();
$secondElement = $tmp[1];

print "$secondElement \n\n Using {}";

$tmp = getArray();
print_r ($tmp{2});
echo "\n\n Using []";
print "$tmp[2]\n\n";


// or
list(, , , $lastElement) = getArray();

print "$lastElement\n\n";


?>
