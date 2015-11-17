<?php
$xml = simplexml_load_file("books.xml"); 
echo "<br/>By manually:<br/>";
echo $xml->book[0]->title['lang'] . ' "'.  $xml->book[0]->title . ' "'. $xml->book[0]['category'] . "'\" ', " . $xml->book[0]->author . "<br/>";
echo $xml->book[1]->title['lang'] . ' "'. $xml->book[1]->title . ' "'. $xml->book[1]['category'] . "'\" ', " . $xml->book[1]->author . "<br/>";

$iCnt = $xml->count();

echo "<br/>All rows[$iCnt]: <br/>";
foreach ($xml->children() as $row){
    echo $row->title . ", " . $row->author . "<br/>";
}

echo "<br/>";
$sName = $xml->getName();
var_dump($sName);

?>

