<?php
/*Replacement using "strtr function" */
$welcomeMsg =  "Hello world.(can you hear me?)";
$aTrans = array('. ' => '\\.', '(' => '\\(', '?' => '\\?', ')' => '\\)');
$strTr = strtr($welcomeMsg, $aTrans);

echo $strTr . PHP_EOL; 
?>

<?php
/*Replacement using string quotemeta ( string $str ) . \ + * ? [ ^ ] ( $ )*/
$welcomeMsg =  "Hello world.(can you hear me?)";
$strTr = quotemeta($welcomeMsg);

echo $strTr . PHP_EOL; 
?>

<?php
/*Replacement using string string preg_quote ( string $str [, string $delimiter = NULL ] )*/
$welcomeMsg =  "Hello world.(can you hear me?)Rupees";
$strTr = preg_quote($welcomeMsg, 'Rupees');

echo $strTr . PHP_EOL; 
?>


<?php
$string = '133445abcdef';
$mask = '12345';
echo strspn ($string, $mask) . PHP_EOL;
?>



<?php
echo 'hello ' . 1 + 2 . '34'. PHP_EOL;

echo ('hello ' . 1)  + 6 . PHP_EOL;
?>


<?php
$x = 'john';
echo substr_replace ($x, 'jenny', 0,1) . PHP_EOL;
?> 

<?php
echo <<<"FOOBAR"
Hello World!
FOOBAR;
?> 


<?php
echo PHP_EOL;
$hello = 'world';
$world = 'hello';
echo $hello . PHP_EOL;
echo $$hello . PHP_EOL;
echo $$$hello . PHP_EOL;
echo $$$$hello . PHP_EOL;
?>

<?php
$string = "This is\tan example\nstring";
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, " \n\t");
//var_dump($tok) . PHP_EOL;
while ($tok !== false) {
    echo "Word=$tok" . PHP_EOL;
    $tok = strtok(" \n\t");
}
?>



<?php
$str = 'apple';

echo strlen(md5($str)) . PHP_EOL;
echo strlen(md5($str, true)) . PHP_EOL;
?>

