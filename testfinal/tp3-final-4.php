<?php
$int = new SplInt(0);
try {
    //$int = 'Try to cast a string value for fun';
    $int = 99.99;
} catch (UnexpectedValueException $uve) {
    echo $uve->getMessage() . PHP_EOL;
}

echo $int . PHP_EOL;
?>
