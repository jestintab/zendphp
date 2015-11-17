<?php
$dom = new DOMDocument();
$dom->load('books.xml');

$a = $dom->documentElement;
echo "<pre>";
print_r($a);
echo "</pre>";
?>
