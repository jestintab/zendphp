<?php
$xml=<<<XML
<?xml version="1.0" standalone="yes"?>
<cars xmlns:c="http://w3schools.com/ns" xmlns:a="http://w3schools.com/country">
  <c:car id="1">Volvo</c:car>
  <c:car id="2">BMW</c:car>
  <c:car id="3">Saab</c:car>
</cars>
XML;

$sxe = new SimpleXMLElement($xml);
$ns = $sxe->getNamespaces(true);
var_dump($ns);
?> 


<?php
echo "<br/><br/>";
$xml = <<<XML
<?xml version="1.0" standalone="yes"?>
<people xmlns:t="http://example.org/ns" xmlns:o="http://example.org/test">
    <t:person id="1">John Doe</t:person>
    <t:person id="2">Susie Q. Public</t:person>
</people>
XML;
 
$sxe = new SimpleXMLElement($xml);

$namespaces = $sxe->getNamespaces(TRUE);
var_dump($namespaces);

?>