
<?php
$s = "this sentence contains many words";
$r = explode(' ', ucfirst($s));
sort($r);
echo implode(',', $r);
?>