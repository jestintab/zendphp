<?php
$float = new SplFloat(3.154);
$newFloat = new SplFloat(3);

try {
    $float = 58.55;//'Try to cast a string value for fun';
} catch (UnexpectedValueException $uve) {
    echo $uve->getMessage() . PHP_EOL;
}

echo $float . PHP_EOL . "<br/>";
echo $newFloat . PHP_EOL  . "<br/>";
?>
