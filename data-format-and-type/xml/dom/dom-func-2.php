<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

#Examples
#Example #1 Import SimpleXML into DOM with dom_import_simplexml() 
//$sxe = simplexml_load_file('xml.node-1.xml');// working
$sxe = simplexml_load_string('<root><myworld><country>India</country><country>Russia</country></myworld></root>');

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
    #echo $dom->saveXML('save-dom-func.xml');// working
    echo $dom->saveXML();
}
catch (Exception $e){
    echo "Not able to write: " . $e->getMessage();
}
?>
