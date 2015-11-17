<?php
#More examples to demonstrate this behaviour:
// Show all errors
error_reporting(E_ALL);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correct
print $arr['fruit'] . " Line " . __LINE__ ."\n";  // apple
print $arr['veggie'] . " Line " . __LINE__ ."\n"; // carrot

// Incorrect.  This works but also throws a PHP error of level E_NOTICE because
// of an undefined constant named fruit
// 
// Notice: Use of undefined constant fruit - assumed 'fruit' in...
print $arr[fruit] . " Line " . __LINE__ ."\n";    // apple

// This defines a constant to demonstrate what's going on.  The value 'veggie'
// is assigned to a constant named fruit.
define('fruit', 'veggie');
echo fruit . " Line " . __LINE__ ."\n";
echo $arr[fruit] . " Line " . __LINE__ ."\n";
// Notice the difference now
print $arr['fruit'] . " Line " . __LINE__ ."\n";  // apple
print $arr[fruit] . " Line " . __LINE__ ."\n";    // carrot

// The following is okay, as it's inside a string. Constants are not looked for
// within strings, so no E_NOTICE occurs here
print "Hello $arr[fruit]" . " Line " . __LINE__ ."\n";      // Hello apple

// With one exception: braces surrounding arrays within strings allows constants
// to be interpreted
print "Hello {$arr[fruit]}" . " Line " . __LINE__ ."\n";    // Hello carrot
print "Hello {$arr['fruit']}" . " Line " . __LINE__ ."\n";  // Hello apple

// This will not work, and will result in a parse error, such as:
// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
// This of course applies to using superglobals in strings as well
#print "Hello $arr['fruit']" . " Line " . __LINE__ ."\n";print "Hello $_GET['foo']" . " Line " . __LINE__ ."\n";

// Concatenation is another option
print "Hello " . $arr['fruit'] . " Line " . __LINE__ ."\n"; // Hello apple
?>
