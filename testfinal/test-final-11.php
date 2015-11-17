<?php
if ($handle = opendir('/var/www/html/')) {
    echo "Directory handle: $handle\n";
    echo "Entries:\n";
    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry\n <br/>";
    } 
    closedir($handle);
}
?>  
<?php

$dir = '/var/www/html/';
$rData = scandir($dir, 1);

print_r($rData);
