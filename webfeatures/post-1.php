<!-- Example #1 File Upload Form 
A file upload screen can be built by creating a special form which looks something like this:
-->
<!-- The data encoding type, enctype, MUST be specified as below -->
<?php 
	if ($_POST){
		print_r($_FILES['userfile']);
	}

?>
<form enctype="multipart/form-data" action="post-2.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form
