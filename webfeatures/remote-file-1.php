<?php
#Example #2 Storing data on a remote server
#user:password@
#$file = fopen ("ftp://micromacexpertsnet:Father@123@ftp.micromacexperts.net/testfolder/outputfile.txt", "w");
$file = fopen ("ftp://micromacexpertsnet:Father@123@ftp.micromacexperts.net/testfolder/outputfile.txt", "w");
if (!$file) {
    echo "<p>Unable to open remote file for writing.\n";
    exit;
}
/* Write the data here. */
fwrite ($file, "I WANT TO WRITE" . "\n");
fclose ($file);
?>
