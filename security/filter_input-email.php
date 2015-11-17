<?php
#Example #1 A filter_input() example
#http://localhost/newphpcert/security/filter_input-email.php?test=dhananj!#$%&'*+-/=ayksharma-.@gmail.com
$search_html = filter_input(INPUT_GET, 'test', FILTER_SANITIZE_EMAIL);
echo "You have searched for $search_html \n";
echo "<a href='http://localhost/newphpcert/security/filter_input-email.php?test=$search_html'>Search again.</a>";


echo "\n" . 'FILTER_SANITIZE_STRING ' . "\n";
$a = "\tcafé\n\n";

echo "[$a]";

echo "\n";
//This will remove the tab and the line break
$b = filter_var($a, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
echo "[$b]";
//This will remove the é.
echo "\n";echo "\n";
$a =  filter_var($a, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo "[$a]";


echo "\n" . 'FILTER_SANITIZE_STRING FILTER_FLAG_ENCODE_AMP ' . "\n";
$str1 = "my name is dhananjay$%he&re";
echo "[$str1]";
echo "\n";
$str1 = filter_var($str1, FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
echo "[$str1]";

?>
