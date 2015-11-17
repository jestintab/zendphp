<?php
// heredoc
$ss = 99;
$str = <<<EOD
Example of string
I'm spanning $ss multiple lines
using heredoc syntax.

EOD;

echo $str;
?>
