<?php
#Example #1 A filter_input() example
#http://localhost/newphpcert/security/filter_input.php?test=my%20book++++%3E+%20thisI have to mumbai CST 29-july-2014$%
$search_html = filter_input(INPUT_GET, 'test', FILTER_SANITIZE_SPECIAL_CHARS);
$search_url = filter_input(INPUT_GET, 'test', FILTER_SANITIZE_ENCODED);
echo "You have searched for $search_html <br/>";
echo "<a href='http://localhost/newphpcert/security/filter_has_var.php?test=$search_url'>Search again.</a>";
?>
