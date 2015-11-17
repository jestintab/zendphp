<?php
$arr = array("one", "two", "three");
print_r($arr);
 
end($arr);
reset($arr);
while (list(, $value) = each($arr)) {
    echo "Value: $value \n";
}

echo "\n\n";

foreach ($arr as $value) {
    echo "Value: $value \n";
}
echo "\n\nAfter foreach\n\n";
reset($arr);
while (list(, $value) = each($arr)) {
    echo "Value: $value \n";
}
?>
