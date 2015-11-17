<?php
	#anupamadsharma<a href="http://redtube.com" target="_new" mouseover="href=google.com">Click to view</a>
	#anupamadsharma<a href="javascript:void(0)" onclick="location.href=http://redtube.com" target="_new">Click to view</a>
	$sUserName = $_POST['username'];
	$sUserNameNew = htmlentities($sUserName);
	
	echo $sUserName . "<br/>";
	echo $sUserNameNew;
?>
