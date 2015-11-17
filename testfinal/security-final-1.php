<?php
$file = basename($_GET['file']); // "../../etc/passwd\0"
echo "<pre> $file <br/>";
system("cat $file");
 