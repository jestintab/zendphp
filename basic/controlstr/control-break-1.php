<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
while (list(, $val) = each($arr)) {
    if ($val == 'five') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}

/* Using the optional argument. */
$i = 0;
while (++$i) {
	echo $i , "\n";
    switch ($i) {
    case 5:
        echo "At 5<br />\n";
        break 1;  /* Exit only the switch. */
    case 10:
        echo "At 10; quitting<br />\n";
        break 2;  /* Exit the switch and the while. */
    case 6:
        echo "At 6<br />\n";
        break 1;  /* Exit only the switch*/
    default:
        break;
    }
}
?>
