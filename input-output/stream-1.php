<?php 
#Example #1 Opening a stream from an active connection
#root@108.171.173.5
error_reporting(0);
ini_set("display_errors", 0);
$sServer = '108.171.173.5';
$session = ssh2_connect($sServer, 22) or die ('Connection failed .... ' . "\n");
if ($session){
	echo "Server connected successfully" . "\n";
	$bAuthStatus = ssh2_auth_password ($session, 'root' , 'Change914');
	if ($bAuthStatus == true){
		echo "Auth Validated successfully" . "\n";
		
		#$connection_string = "ssh2.sftp://$session/";
		#unset($session);
		#$iCopyStat2 = ssh2_scp_send($session, '/var/www/newphpcert/io/test.new2.txt', '/var/www/more/more2/test2.txt', 0644);
		#echo "[$iCopyStat2]";
		
		#$iCopyStat = ssh2_scp_recv($session, '/var/www/more/more2/test.txt', '/var/www/newphpcert/io/test.new.txt');
		#echo "[$iCopyStat]";
		
		#$stream = fopen($connection_string . "var/www/more/more2/test.txt", 'r');
		
		#$stream = fopen("ssh2.tunnel://$session/$sServer:/var/www/more/more2/test.txt", 'r');
		
		#var_dump($session);
		
		#$stream = fopen("ssh2.sftp://$session/var/www/more/more2/test.txt", 'r'); // Working
		
		#$sConnection = ssh2_tunnel($session, $sServer, 22) or die ("ssh2_tunnel failed " . $sConnection); // Working
		
		
		$stream = fopen("ssh2.tunnel://$session/$sServer:/var/www/more/more2/test.txt", 'r');
		if ($stream){			
			$contents = fread($stream, 1024);
			echo "Data: " . $contents . "\n";
			fclose($stream);
		}
		else{
			echo "Error in reading file";
		}
	}
	else{
		echo "Auth invalid try again..." . "\n";
	}
}
else{
	echo "Connection failed -- else " . "\n";
}



?>
