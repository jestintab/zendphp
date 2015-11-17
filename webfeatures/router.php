<?php
// router.php
$file = 'abc.jpg';
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
	header("content-type: image/jpg");
	header('Content-Type:'.$type);
	header('Content-Length: ' . filesize($file));
	readfile($file);
    return false;    // serve the requested resource as-is.
} else { 
    echo "<p>Welcome to PHP</p>";
}
?>
