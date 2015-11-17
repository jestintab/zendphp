<?php
	print_r($_FILES);
	$sFileName = $_FILES['file']['name'];
	$s = shell_exec("php filter_input.php $sFileName");
	echo "[$s]";
?>
