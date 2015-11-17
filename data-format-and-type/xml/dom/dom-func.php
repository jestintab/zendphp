<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

#Examples
#Example #1 Import SimpleXML into DOM with dom_import_simplexml() 

$sxe = simplexml_load_string('<books><book><author>willy</author><title>blah</title></book></books>');

if ($sxe === false) {
    echo 'Error while parsing the document';
    exit;
}

$dom_sxe = dom_import_simplexml($sxe);

if (!$dom_sxe) {
    echo 'Error while converting XML';
    exit;
}

$dom = new DOMDocument('1.0');

$dom_sxe = $dom->importNode($dom_sxe, true);
$dom_sxe = $dom->appendChild($dom_sxe);

try{
	echo $dom->save('save-dom-func.xml');
}
catch (Exception $e){
	echo "Not able to write: " . $e->getMessage();
}
?>
