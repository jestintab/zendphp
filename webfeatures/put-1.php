<?php
error_reporting(E_ALL);
ini_set('display_errors	',1);
#Example #1 Saving HTTP PUT files
/* PUT data comes in on the stdin stream */
#$putdata = 
$handle = fopen("php://input", "r");

/* Open a file for writing */

$fp = fopen("/var/www/uploads/myputfile.txt", "w");
try{
	 if (!($handle = fopen("php://input", "r"))){
         throw new Exception("Can't get PUT data."); 
     }
     
	while ($buffer = fgets($handle, 4096)) {
		if (!$buffer){
			echo "----<br/>";
		}
		else{
			echo $buffer;
		}
    }
}
catch (exception $e){
	echo $e->getMessage();
}

if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
die();
while ($data = fread($putdata, 1024)){
	echo "----";
	echo $data;
	echo "----";	
	fwrite($fp, $data);
}



/* Close the streams */
fclose($fp);
fclose($putdata);
?>
