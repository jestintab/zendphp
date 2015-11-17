<?php
//Example #1 urlencode() example
$userinput = "tree&age=909&address=b-106 Ambe Bhakti_plot 97, sector / \ | * - % 4 * () # @ & nn 5 ! @bulding no. 2";
echo '<a href="mycgi?foo=', urlencode($userinput), '">get my address</a>';
?>
