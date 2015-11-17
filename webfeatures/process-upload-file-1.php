<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);	
	if ($_POST){
		if ($_FILES){
			echo "File details: ";
			print_r($_FILES);
			$sFileTmp = $_FILES['uploadpic']['tmp_name'];
			$sFileName = $_FILES['uploadpic']['name'];
			$sFileError = $_FILES['uploadpic']['error'];
			$sDist = "/var/www/more/tmp/abc/";
			$bIsUploaded = is_uploaded_file($sFileTmp); 
			$iUploadStatus = move_uploaded_file($sFileTmp, $sDist.$sFileName);
			echo "<br/><br/>";
			echo $iUploadStatus . " | " .  $sFileError  . " | " . $bIsUploaded;
			echo "<br/><br/>";
			if($bIsUploaded == 1 && $sFileError == UPLOAD_ERR_OK && $iUploadStatus == 1){
				echo "Uploaded by form ";
			}
			else{
				echo "Send email ";
			}
		}
	}
?>