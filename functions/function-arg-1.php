<?php
#Example #2 Passing function parameters by reference
function add_some_extra($string)
{
  return  $string .= 'and something extra.'. "\n\n";
}
$str = "\n\n" . 'This is a string, ';
echo add_some_extra($str);
//echo $str;    // outputs 'This is a string, and something extra.'
?>
