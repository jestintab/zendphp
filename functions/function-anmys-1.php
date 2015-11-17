<?php
#Example #2 Anonymous function variable assignment example
$greet = function($name, $age=99)
{
    printf("Hello %s\r\n", $name . ' ' . $age);
};

$greet('World');
$greet('PHP');
?>
