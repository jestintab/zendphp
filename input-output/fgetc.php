
<?php
$fp = fopen('test.csv', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}
while (false !== ($char = fgetc($fp))) {
    echo "$char \n";
}
?>
