<?php
error_reporting(E_ALL);
ini_set("display_error",1);
$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    $zip->addFile('index.txt', 'newname.txt');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>
