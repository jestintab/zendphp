<?php
// Works as of PHP 4.3.0
echo get_include_path() . PHP_EOL;
// Works in all PHP versions
echo ini_get('include_path') . PHP_EOL;
?>