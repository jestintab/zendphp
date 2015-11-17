<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

print_r($array);
echo "<br/>\n";
// as of PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
print_r($array);
echo "<br/>\n";
?>
