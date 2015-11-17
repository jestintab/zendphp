
<?php
ob_start();
echo "dreaming";
$ob = ob_get_contents();
echo strlen($ob);
ob_flush();
?>


<?php

ob_start();

echo "Hello ";

$out1 = ob_get_contents();

echo "World";

$out2 = ob_get_contents();

ob_end_clean();

var_dump($out1, $out2);
?>
