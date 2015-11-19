<!--

 Control statements


 -->

<!-- 1.Control statements and break -->
<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
while (list(, $val) = each($arr)) {
    if ($val == 'stop') {
        break ;    /* You could also write 'break 1;' here. */
    }
    echo "$val\n"; //breaks exits for this loop
}


//o/p
//
?>
<!--  2. Tick usage example -->
<?php
declare(ticks=1);
echo "\n";
// A function called on each tick event
// Ticks have been deprecated as of PHP 5.3

function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler');

$a = 1;

if ($a > 0) {
    $a += 2;
    print($a) . "<br>";
}
//tick_handler() called tick_handler() called tick_handler() called 3
//tick_handler() called tick_handler() called tick_handler() called tick_handler() called

?>
<!-- 3. FOREACH -->

<?php 
# A notice will be generated if there aren't enough array elements to fill the list():
$array = [[1, 2, 5], [3, 4, 6]];

//print_r($array);
foreach ($array as list($a, $b, $c)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "A: $a; B: $b; C: $c <br>";
}
//output
// A: 1; B: 2; C: 5 
// A: 3; B: 4; C: 6 
?>

<?php
#Example #1 goto example
goto a;
echo "not print this line";
goto gc;
echo "top F Foo";
echo 'F Foo' . "\n";
echo "bottom F Foo";

a:
echo 'A Bar' . "\n";

echo "bottom F Foo" . "\n";

//goto gc;
ab:
echo 'Jump' . "\n"; 
echo 'Skip' . "\n";

gc:
echo 'G Bar' . "\n";

//output
// A Bar
// bottom F Foo 
// Jump Skip G Bar
?>
<!-- exit and break difference
exit() stops the script at that point with no code from that point running.
break() is used in loops and so on, and stops the current code block before running onto the next portion of code. (If used in a for loop that is to run 20 times for example, if break is used on the 8th iteration, the for loops ends and moves on to run whatever code comes next). -->


<!--

 2. Expressions 

 -->
 <?php
function double($i)
{
    return $i*2;
}
$b = $a = 5;        /* assign the value five into the variable $a and $b */
$c = $a++;          /* post-increment, assign original value of $a 
                       (5) to $c */

$e = $d = ++$b;     /* pre-increment, assign the incremented value of 
                       $b (6) to $d and $e */

/* at this point, both $d and $e are equal to 6 */

$f = double($d++);  /* assign twice the value of $d before
                       the increment, 2*6 = 12 to $f */

echo '$f : ' . $f , ', $d : ' . $d ."\n"; //$f : 12, $d : 7 

$g = double(++$e);  /* assign twice the value of $e after
                       the increment, 2*7 = 14 to $g */

echo '$g : ' . $g , ', $e : ' . $e ."\n"; //$g : 14, $e : 7

$h = $g += 10;      /* first, $g is incremented by 10 and ends with the 
                       value of 24. the value of the assignment (24) is 
                       then assigned into $h, and $h ends with the value 
                       of 24 as well. */
                       
echo '$h : ' . $h , ', $g : ' . $g ."\n"; // $h : 24, $g : 24
?>

<!--

 3. Variables

 -->
 <?php
//error displaying
error_reporting(E_ALL);
ini_set("display_errors",1);
ini_set('register_globals',1);
echo $_GET['id'];

echo $id

?>

<?php //SCOPES

$a = 1; /* global scope */ 

function test()
{ 
	$a = 99;
    echo "In test() " . $a ."\n\n"; /* reference to local scope variable */ 
} 

echo $a ."\n\n";

test();

//1 
//In test() 99
?>

<?php
// Using global scopes

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
    $a = 10;
    return $b;
} 

$d = Sum();
echo 'b ' . $b. "\n\n";
echo 'a ' . $a. "\n\n";

echo 'd ' . $d. "\n\n";
//b 3 
//a 10
//d 3
?>

<?php 
//variables

$sName = 'sName';
$sNAme = 'sNAme';

echo $sName ."\n"; 
echo $sNAme ."\n";

$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var" ."\n";      // outputs "Bob, Joe"

#$4site = 'not yet';     // invalid; starts with a number echo $4site."\n"

$_4site = 'not yet';    // valid; starts with an underscore
echo $_4site."\n";

$täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.
echo "$täyte"."\n";
//sName 
//sNAme 
//Bob, Joe 
//not yet 
//mansikka
?>
