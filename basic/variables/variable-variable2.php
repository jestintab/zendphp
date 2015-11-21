<?php
$a = 'hello';
$$a = 'world';
print "\n";
print "$a ${$a} \n"; //hello world
print "$a $hello \n";//hello world

$a = 'dhananjay';
$$a = 'anupama';
print "\n";
print "$a ${$a} \n"; //dhananjay anupama
print "$a $dhananjay \n"; //dhananjay anupama

?>
