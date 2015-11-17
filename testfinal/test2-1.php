<?php
define('ABC', 'Val of ABC ');
echo constant('ABC') . PHP_EOL;
echo ABC . PHP_EOL;


define('EMPTY', '');
echo constant('EMPTY');

if (!empty(constant('EMPTY'))){
   echo " if cond " . PHP_EOL;
}
else{
    echo " ELSE cond " . PHP_EOL;
}

