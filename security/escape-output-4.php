<?php
$str = "A 'quote' « is <b>bold</b> \"Darling\" here ";
echo $str . "\n\n" ;
echo strip_tags($str);
#A 'quote' « is bold "Darling" here
?>
