<?php
//Example #1 Usage example of rtrim() 
$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";

echo "Line -- " . __LINE__ . var_dump($text, $binary, $hello);

print "\n";
$trimmed = rtrim($text);
echo "Line -- " . __LINE__ . " : " . var_dump($trimmed);

$trimmed = rtrim($text, " \t.");
echo "Line -- " . __LINE__  . " : " .  var_dump($trimmed);
$trimmed = rtrim($hello, "Hdle");
echo "Line -- " . __LINE__  . " : " .  var_dump($trimmed);
// trim the ASCII control characters at the end of $binary
// (from 0 to 31 inclusive)
$clean = rtrim($binary, "\x00..\x1F");
echo "Line -- " . __LINE__  . " : " .  var_dump($clean) . PHP_EOL;

$sStr = 'http://phpriot.com/';
$sQuiz = '/quiz/';

echo rtrim($sStr, "/") . PHP_EOL;
echo ltrim($sQuiz, "/") . PHP_EOL;

?> 