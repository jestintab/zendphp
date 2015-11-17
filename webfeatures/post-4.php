<?php
foreach ($_FILES["pictures"]["error"] as $key => $error) {
	echo $error."<br/><br/>";
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        $name = $_FILES["pictures"]["name"][$key];
        move_uploaded_file($tmp_name, "/var/www/uploads/$name");
    }
}
exit()
?>
