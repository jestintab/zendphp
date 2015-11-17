<?php
$aa = DOMDocument::loadHTML(file_get_contents('http://www.babybumpphoto.in/services.php')); 

print_r($aa);


?>


<?php
$doc = new DOMDocument();
$doc->loadHTML("<html><body>Test<br></body></html>");
echo $doc->saveHTML();
?>
